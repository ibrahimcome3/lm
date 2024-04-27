-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 09:20 PM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u633821528_goodguyng`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brandID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `websiteURL` varchar(500) DEFAULT NULL,
  `Dateadded` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandID`, `Name`, `websiteURL`, `Dateadded`, `image`) VALUES
(1, 'Heinz.', 'https://www.heinz.com/', '2022-12-26 00:00:00', ''),
(2, 'Riunite', 'https://www.riunite.com/', '2022-12-26 00:00:00', ''),
(3, 'jameson whiskey', 'https://www.jamesonwhiskey.com/en-ng/', '2022-12-26 00:00:00', ''),
(4, 'Coca Cola', '', '2022-12-31 00:00:00', ''),
(5, 'Heineken', '', '2023-01-31 00:00:00', ''),
(6, 'Nestle', '', '2023-01-31 00:00:00', ''),
(7, 'Coca-cola Drink', NULL, '2023-07-20 21:25:38', ''),
(8, 'Fanta', NULL, '2023-07-20 21:25:38', ''),
(9, 'Monster Energy Drink', NULL, '2023-07-20 21:25:38', ''),
(10, 'T&G Energy Drink', NULL, '2023-07-20 21:25:38', ''),
(11, 'Climax Drinks', NULL, '2023-07-20 21:25:38', ''),
(12, 'Eva', NULL, '2023-07-20 21:25:38', ''),
(13, 'Jameson Whiskey', NULL, '2023-07-20 21:25:38', ''),
(14, 'Chivas Regal', NULL, '2023-07-20 21:25:38', ''),
(15, 'Glenfiddich Whiskey', NULL, '2023-07-20 21:25:38', ''),
(16, 'Jack Daniels', NULL, '2023-07-20 21:25:38', ''),
(17, 'Cway', NULL, '2023-07-20 21:25:38', ''),
(18, 'Nestle', NULL, '2023-07-20 21:25:38', ''),
(19, 'Chi Exotic', NULL, '2023-07-20 21:25:38', ''),
(20, 'Chi Chivita', NULL, '2023-07-20 21:25:38', ''),
(21, 'Chi Happy Hour', NULL, '2023-07-20 21:25:38', ''),
(22, 'Heineken', NULL, '2023-07-20 21:25:38', ''),
(23, '33 Export', NULL, '2023-07-20 21:25:38', ''),
(24, 'Martini', NULL, '2023-07-20 21:25:38', ''),
(25, 'Lambrusco Wine', NULL, '2023-07-20 21:25:38', ''),
(26, 'Organic Cider', NULL, '2023-07-20 21:25:38', ''),
(27, 'description_', NULL, '2023-07-20 21:25:38', ''),
(28, 'Heinz', NULL, '2023-07-20 21:25:38', ''),
(29, 'Jeans Women', NULL, '2023-07-20 21:25:38', ''),
(30, 'T-Shirt', NULL, '2023-07-20 21:25:38', ''),
(31, 'Chinos', NULL, '2023-07-20 21:25:38', ''),
(32, 'Polo T-shirt', NULL, '2023-07-20 21:25:38', ''),
(33, 'Office Furniture', NULL, '2023-07-20 21:25:38', ''),
(34, 'Home Equipment\'s', NULL, '2023-07-20 21:25:38', ''),
(35, 'Local Food Spices', NULL, '2023-07-20 21:25:38', ''),
(36, 'Kids Shoes', NULL, '2023-07-20 21:25:38', ''),
(37, 'Fashion Female Kid T-Shirt', NULL, '2023-07-20 21:25:38', ''),
(38, 'Summer T-Shirts Male', NULL, '2023-07-20 21:25:38', ''),
(39, 'Levis Children Trousers', NULL, '2023-07-20 21:25:38', ''),
(40, 'School Bag', NULL, '2023-07-20 21:25:38', ''),
(41, 'Hisense', NULL, '2023-07-20 21:25:38', ''),
(42, 'Zealot Speaker', NULL, '2023-07-20 21:25:38', ''),
(43, 'Samsung Galaxy A Series', NULL, '2023-07-20 21:25:38', ''),
(44, 'Ladies Fashion Bags', NULL, '2023-07-20 21:25:38', ''),
(45, 'Sofas', NULL, '2023-07-20 21:25:38', ''),
(46, 'Office Chairs', NULL, '2023-07-20 21:25:38', ''),
(47, 'Chi Hollandia ', NULL, '2023-07-20 21:25:38', ''),
(48, 'Plant Based Juice', NULL, '2023-07-20 21:25:38', ''),
(49, 'Bestblend Napoléon Spirit', NULL, '2023-07-20 21:25:38', ''),
(50, 'Amarula', NULL, '2023-07-20 21:25:38', ''),
(126, 'Kings', 'https://devonkings.com.ng', '2024-02-25 16:46:59', 'brand/234234.png'),
(127, 'hp', 'https://wwww.hp.com', '2024-03-23 21:26:43', 'brand/hp.png'),
(128, 'Others', NULL, '2024-03-23 21:40:43', ''),
(129, 'Notting', 'https://intl.nothing.tech', '2024-03-23 22:01:31', 'brand/Nothing_Logo.jpg'),
(135, 'Hennessy', 'https://www.hennessy.com/en-int/hennessy-cognac', '2024-04-10 20:51:47', ''),
(131, 'Heir Thermocool', NULL, '2024-03-24 21:31:49', ''),
(132, 'skyrun', NULL, '2024-03-25 20:27:20', ''),
(133, 'Apple', 'https://www.apple.com', '2024-03-27 21:06:19', 'brand/apple.png'),
(134, 'Hisense', 'https://global.hisense.com', '2024-03-29 06:06:14', 'brand/hisense-logo.png'),
(136, 'wahu', NULL, '2024-04-10 21:18:34', ''),
(137, 'XIAOMI', 'https://www.mi.com/ng/', '2024-04-15 20:01:21', ''),
(138, 'martell', 'https://www.martell.com/en-ng/', '2024-04-17 20:27:37', ''),
(139, 'Absolute', 'https://www.absolut.com/en/', '2024-04-17 20:29:21', ''),
(140, 'Oraimo', 'https://ng.oraimo.com/?utm_source=google&utm_medium=google/cpc&campaignid=20220158535&kwd=oraimo&gad_source=1&gclid=Cj0KCQjw8pKxBhD_ARIsAPrG45ngt13pn9XrtEUtrq8SPFXPNU4YMcgbNll8WwWtOQISMny2DkgBqmoaAltUEALw_wcB', '2024-04-21 19:11:41', ''),
(143, 'infinix', 'https://ng.infinixmobility.com', '2024-04-21 19:28:17', ''),
(144, 'oriamo', 'https://ng.oraimo.com', '2024-04-22 17:45:14', ''),
(145, 'JBL', NULL, '2024-04-24 10:17:49', ''),
(146, 'Realme', NULL, '2024-04-24 10:17:49', ''),
(147, 'wolf blass', 'https://www.wolfblass.com', '2024-04-25 18:17:37', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cartitem`
--

CREATE TABLE `cartitem` (
  `cartid` int(11) NOT NULL,
  `InventoryItemID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `unit_price` float NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_new`
--

CREATE TABLE `category_new` (
  `cat_id` int(11) NOT NULL,
  `categoryName` varchar(70) NOT NULL,
  `cat_path` varchar(200) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `json_` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`json_`)),
  `category_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category_new`
--

INSERT INTO `category_new` (`cat_id`, `categoryName`, `cat_path`, `depth`, `json_`, `category_img`) VALUES
(1, 'Drinks', '1', 1, '{\"roots\": \"DRINKS\"}', ''),
(2, 'Non-alcoholic drinks', '1/2', 2, '{\"roots\": \"DRINKS\", \"subroot1\" : \"NON-ALCOHOLIC-DRINKS\"}', ''),
(3, 'Water', '1/2/3', 3, '{\"roots\": \"DRINKS\", \"subroot1\":\"NON-ALCOHOLIC-DRINKS\", \"subroot2\" : \"WATER\"}', ''),
(4, 'Juice', '1/2/4', 3, '{\"roots\": \"DRINKS\", \"subroot1\" : \"NON-ALCOHOLIC-DRINKS\", \"subroot2\" : \"JUICE\"}', ''),
(5, 'Milk', '1/2/5', 3, '{\"roots\": \"DRINKS\", \"subroot1\" : \"NON-ALCOHOLIC-DRINKS\" , \"subroot2\" : \"MILK\"}', ''),
(6, 'Plant Juice', '1/2/6', 3, '{\"roots\": \"DRINKS\", \"subroot1\" : \"NON-ALCOHOLIC-DRINKS\", \"subroot2\" : \"PLANT JUICE\"}', ''),
(7, 'Alcoholic', '1/7', 2, '{\"roots\": \"DRINKS\", \"subroot1\" : \"ALCOHOLIC\"}', ''),
(8, 'Beer', '1/7/8', 3, '{\"roots\": \"DRINKS\", \"subroot1\" : \"ALCOHOLIC\", \"subroot2\" : \"BEER\"}', ''),
(9, 'Cider', '1/7/9', 3, '{\"roots\": \"DRINKS\", \"subroot1\" : \"ALCOHOLIC\", \"subroot2\" : \"CIDER\"}', ''),
(10, 'Wine', '1/7/10', 3, '{\"roots\": \"DRINKS\", \"subroot1\" : \"ALCOHOLIC\", \"subroot2\": \"WINE\"}', ''),
(11, 'Sprits', '1/7/11', 3, '{\"roots\": \"DRINKS\", \"subroot1\" : \"ALCOHOLIC\", \"subroot2\" : \"SPIRIT\"}', ''),
(12, 'Liqueurs', '1/7/12', 3, '{\"roots\": \"DRINKS\", \"subroot1\" : \"ALCOHOLIC\", \"subroot2\" : \"LIGUEUR\"}', ''),
(13, 'Carbonated Drinks', '1/2/13', 3, '{\"roots\": \"DRINKS\", \"subroot1\" : \"NON-ALCOHOLIC-DRINKS\", \"subroot2\" : \"CARBONATED DRINK\"}', ''),
(14, 'Energy Drink', '1/2/14', 3, '{\"roots\": \"DRINKS\", \"subroot1\" : \"NON-ALCOHOLIC-DRINKS\", \"subroot2\" : \"ENERGY DRINK\"}', ''),
(15, 'Whiskey', '1/7/15', 3, '{\"roots\": \"DRINKS\", \"subroot1\": \"ALCOHOLIC\", \"subroot2\" : \"WHISKEY\"}', ''),
(16, 'Clothing', '16', 1, '{\"roots\": \"CLOTHING\"}', ''),
(17, 'Children Clothing', '16/17', 2, '{\"roots\": \"CLOTHING\", \"subroot1\" : \"CHILDREN CLOTHING\"}', ''),
(18, 'Men Apparel', '16/18', 2, '{\"roots\": \"CLOTHING\", \"subroot1\" : \"MEN APPAREL\"}', ''),
(19, 'Women Apparel', '16/19', 2, '{\"roots\": \"CLOTHING\", \"subroot1\" : \"WOMEN APPAREL\"}', ''),
(20, 'Electronics', '20', 1, '{\"roots\": \"ELECTRONICS\"}', ''),
(21, 'Laptop', '20/21', 2, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"LAPTOP\"}', ''),
(22, 'Mobile Phones', '20/22', 2, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"MOBILE PHONES\"}', ''),
(23, 'Kitchen Electronics', '20/23', 2, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"KITCHEN ELECTRONICS\"}', ''),
(24, 'Tablet', '20/24', 2, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"TABLETS\"}', ''),
(25, 'Audio', '20/25', 2, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"AUDIO\"}', ''),
(26, 'Sofars', '37/26', 2, '{\"roots\": \"FURNITURE\", \"subroot1\": \"SOFARS\"}', ''),
(27, 'Chairs', '37/27', 2, '{\"roots\": \"FURNITURE\", \"subroot1\" : \"CHAIRS\"}', ''),
(28, 'Tables', '37/28', 2, '{\"roots\": \"FURNITURE\", \"subroot1\" : \"TABLES\"}', ''),
(29, 'TV', '20/29', 2, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"TV\"}', ''),
(30, 'Shoes', '30', 1, '{\"roots\": \"SHOES\"}', ''),
(31, 'Men Shoes', '30/31', 2, '{\"roots\": \"SHOES\", \"subroot1\" : \"MEN SHOES\"}', ''),
(32, 'Children Shoes', '30/32', 2, '{\"roots\": \"SHOES\",  \"subroot1\" : \"CHILDREN SHOES\"}', ''),
(33, 'Women Shoes', '30/33', 2, '{\"roots\": \"SHOES\", \"subroot1\" : \"WOMEN SHOES\"}', ''),
(34, 'Bags', '34', 1, '{\"roots\": \"BAGS\"}', ''),
(35, 'School Bags', '34/35', 2, '{\"roots\": \"SHOES\", \"subroot1\" : \"SCHOOL BAGS\"}', ''),
(36, 'Food Item', '36', 1, '{\"roots\" : \"FOOD-ITEM\"}', ''),
(37, 'Furniture', '37', 1, '{\"roots\": \"FURNITURE\"}', ''),
(38, 'Office Furniture', '37/38', 2, '{\"roots\": \"FURNITURE\", \"subroot1\" : \"OFFICE FURNITURE\"}', ''),
(39, 'Children Clothing Female', '16/17/39', 3, '{\"roots\": \"CLOTHING\", \"subroot1\" : \"CHILDREN CLOTHING\", \"subroot2\" : \"FEMALE\"}', ''),
(40, 'Children Clothing Male', '16/17/40', 3, '{\"roots\": \"CLOTHING\", \"subroot1\" : \"CHILDREN CLOTHING\" , \"subroot2\" : \"MALE\"}', ''),
(41, 'Pets Shoes', '30/41', 2, '{\"roots\": \"SHOES\", \"subroot1\" : \"PET SHOES\"}', ''),
(42, 'Memory Card', '20/42', 2, '{\"roots\": \"ELECTRONICS\", \"subroot1\": \"MEMORY\"}', ''),
(43, 'Vegetable Oil', '36/43', 2, '{\"roots\": \"FOOD-ITEM\", \"subroot1\" : \"COOKING OIL\"}', ''),
(44, 'Female Hand Bag', '34/44', 2, '{\"roots\": \"BAGS\", \"subroot1\" : \"FEMALE HANDBAG\"}', ''),
(45, 'Bra', '30/45', 2, '{\"roots\": \"CLOTHING\", \"subroot1\" : \"BRA\"}', ''),
(46, 'Rice', '36/46', 2, '{\"roots\": \"FOOD-ITEM\", \"subroot1\" : \"RICE\"}', ''),
(47, 'Hisense TV', '20/29/47', 3, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"TV\", \"subroot2\" : \"Hisense\"}', ''),
(48, 'GAMING', '20/48', 2, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"GAMING\"}', ''),
(49, 'Notting Phone', '20/22', 3, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"MOBILE PHONES\" , \"Subroot2\":\"Notting Mobile Phone\"}', ''),
(50, 'iphone', '20/22/50', 3, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"MOBILE PHONES\", \"subroot2\": \"iphone\"}', ''),
(51, 'Hisense Deep Freezer', '20/52/51', 3, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"Freezers\", \"subroot2\" : \"Hisense\"}', ''),
(52, 'freezer', '20/52', 2, '{\"roots\": \"ELECTRONICS\", \"subroot1\": \"freezer\"}', ''),
(53, 'Haier Thermocool Freezer', '20/54/53', 3, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"Freezers\", \"subroot2\" : \"Thermocool Deep freezer\"}', ''),
(54, 'Skyrun Freezer', '20/54/53', 3, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"Freezers\", \"subroot2\" : \"sky Deep freezer\"}', ''),
(55, 'tablet', '20/55', 2, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"tablet\"}', ''),
(56, 'Apple ipad', '20/55/56', 3, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"tablet\", \"subroot2\": \"ipad\"}', ''),
(57, 'Cognac', '1/7/57', 3, '{\"roots\": \"DRINKS\", \"subroot1\" : \"ALCOHOLIC\", \"subroot2\" : \"Cognac\"}', ''),
(58, 'Bike', '58', 1, '{\"roots\": \"Bike\"}', ''),
(59, 'Electric Bike', '58/59', 2, '{\"roots\": \"Bike\", \"subroot1\" : \"Electric Bike\"}', ''),
(60, 'Wahu Ghana E Bike', '58/59/60', 2, '{\"roots\": \"Bike\", \"subroot1\" : \"Electric Bike\",\"subroot1\":\"Wahu\"}', ''),
(61, 'Xiaomi', '20/22/61', 3, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"MOBILE PHONES\", \"subroot2\": \"Xiaomi\"}', ''),
(62, 'vodka', '1/7/62\r\n', 3, '{\"roots\": \"DRINKS\", \"subroot1\" : \"ALCOHOLIC\", \"subroot2\" : \"vodka\"}', ''),
(64, 'Power bank', '20/64', 3, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"Power Bank\"}', ''),
(65, 'Oraimo', '20/64/65', 3, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"Power Bank\", \"subroot2\": \"Oraimo\"}', ''),
(66, 'Wireless Airbuds', '20/66', 2, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"Wireless Airbuds\"}', ''),
(67, 'Oraimo Earbuds', '20/66/67', 3, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"Wireless Air buds\", \"subroot2\":\"Oraimo\"}', ''),
(68, 'JBL Air buds', '20/66/68', 3, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"Wireless Air buds\", \"subroot2\":\"JBL\"}', ''),
(69, 'Realme air buds', '20/66/69', 3, '{\"roots\": \"ELECTRONICS\", \"subroot1\" : \"Wireless Air buds\", \"subroot2\":\"Realme\"}', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_fname` varchar(200) DEFAULT NULL,
  `customer_lname` varchar(200) DEFAULT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_address1` text DEFAULT NULL,
  `customer_address2` text DEFAULT NULL,
  `customer_country` text DEFAULT NULL,
  `customer_city` text DEFAULT NULL,
  `customer_state` text DEFAULT NULL,
  `customer_landmark` text DEFAULT NULL,
  `customer_phone` text DEFAULT NULL,
  `customer_zip` varchar(30) DEFAULT NULL,
  `customer_status` varchar(100) NOT NULL DEFAULT 'NONMEMBER',
  `password` text DEFAULT NULL,
  `profile_image` text DEFAULT NULL,
  `customer_display_name` varchar(200) DEFAULT NULL,
  `reset_link_token` varchar(1000) NOT NULL,
  `expiry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_fname`, `customer_lname`, `customer_email`, `customer_address1`, `customer_address2`, `customer_country`, `customer_city`, `customer_state`, `customer_landmark`, `customer_phone`, `customer_zip`, `customer_status`, `password`, `profile_image`, `customer_display_name`, `reset_link_token`, `expiry_date`) VALUES
(41, 'muhammad', 'ibrahim', 'ibrahimcome3@gmail.com', 'No 31 saint finbers road akoka yaba lagos', 'No 322, second avenue lagos badagri express way lagos', 'NG', 'Lagos', 'Lagos', 'Zenith bank ', NULL, '10345342', 'MEMBER', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'ibrahimcome39', '', '0000-00-00 00:00:00'),
(81, 'ibrahim', 'Ahmad Muhammad', 'muhammadia@ndic.gov.ng', 'No 31 Saint finberss college Road Yaba Lagos', 'No 29 Yankaba kawaji Qtrs yaba Lagos', NULL, NULL, 'lagos', NULL, '08051067944', '100213', 'NONMEMBER', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, '', '0000-00-00 00:00:00'),
(82, 'ibrahim', 'Ahmad Muhammad', 'ibrahimcome33@gmail.com', 'No 31 Saint finberss college Road Yaba Lagos', 'No 29 Yankaba kawaji Qtrs yaba Lagos', NULL, NULL, 'lagos', NULL, '08051067944', '100213', 'NONMEMBER', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, '', '0000-00-00 00:00:00'),
(83, 'ibrahim ahmad muhammad', 'efefef', 'muhammadiaa@ndic.gov.ng', 'eferferf', 'ewfeferfe', NULL, NULL, 'erferfer', NULL, '080566874421', '32513', 'NONMEMBER', 'd41d8cd98f00b204e9800998ecf8427e', NULL, 'bbbbb', '', '0000-00-00 00:00:00'),
(84, 'Ibrahim ', 'Muhammad', 'ibrahimcome3@yahoo.com', 'No 11 yaba Ebutemeta Lagos', 'Near Zenith Bank', NULL, NULL, 'Lagos', NULL, '08051067944', '12343', 'NONMEMBER', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, '', '0000-00-00 00:00:00'),
(85, 'gj', 'fj', 'blo40079@gmail.com', 'N knjnj', 'hbjcfg', NULL, NULL, 'iuhkugg', NULL, '09087678686', 'iugfyu', 'NONMEMBER', 'e807f1fcf82d132f9bb018ca6738a19f', NULL, NULL, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customeraddress`
--

CREATE TABLE `customeraddress` (
  `c_addressID` int(11) NOT NULL,
  `Address1` int(11) NOT NULL,
  `Address2` int(11) NOT NULL,
  `customerID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `orderNO` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `orderdate` datetime NOT NULL DEFAULT current_timestamp(),
  `payment_type` varchar(20) NOT NULL,
  `delivery_date` date NOT NULL,
  `sale_amount` float NOT NULL,
  `order_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`orderNO`, `CustomerID`, `orderdate`, `payment_type`, `delivery_date`, `sale_amount`, `order_status`) VALUES
(3, 15, '2023-02-27 22:08:27', 'pay on delivery', '2012-01-01', 16000, 'INCOMPLETE'),
(4, 16, '2023-02-27 22:08:30', 'pay on delivery', '2012-01-01', 16000, 'INCOMPLETE'),
(5, 17, '2023-02-27 22:09:46', 'pay on delivery', '2012-01-01', 16000, 'INCOMPLETE'),
(6, 18, '2023-02-27 22:43:14', 'pay on delivery', '2012-01-01', 16000, 'INCOMPLETE'),
(7, 19, '2023-02-27 23:06:42', 'pay on delivery', '2012-01-01', 16000, 'INCOMPLETE'),
(8, 20, '2023-02-27 23:29:43', 'pay on delivery', '2012-01-01', 16000, 'INCOMPLETE');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_address`
--

CREATE TABLE `customer_order_address` (
  `customer_address_id` int(11) NOT NULL,
  `customer_id` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_state` text NOT NULL,
  `customer_country` text NOT NULL,
  `customer_pincode` text NOT NULL,
  `customer_mobile_number` text NOT NULL,
  `customer_address_type` text NOT NULL,
  `status` int(11) NOT NULL,
  `customer_address_line_1` text NOT NULL,
  `customer_address_line_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deliveypersonel`
--

CREATE TABLE `deliveypersonel` (
  `deliveryPersonelID` int(11) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Telephone` text NOT NULL,
  `Address` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE `featured` (
  `featuredid` int(11) NOT NULL,
  `inventoryItemId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`featuredid`, `inventoryItemId`) VALUES
(4, 44),
(2, 64),
(1, 65);

-- --------------------------------------------------------

--
-- Table structure for table `inventoryitem`
--

CREATE TABLE `inventoryitem` (
  `InventoryItemID` int(11) NOT NULL,
  `small_description` varchar(300) NOT NULL,
  `quantityOnHand` int(11) NOT NULL,
  `cost` float NOT NULL,
  `reorderQuantity` int(11) NOT NULL,
  `productItemID` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `category` int(11) NOT NULL,
  `sku` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`sku`)),
  `barcode` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `inventoryitem`
--

INSERT INTO `inventoryitem` (`InventoryItemID`, `small_description`, `quantityOnHand`, `cost`, `reorderQuantity`, `productItemID`, `date_added`, `category`, `sku`, `barcode`) VALUES
(5, 'SanDisk Ultra microSDXC UHC-I card 128gb', 100, 18000, 100, 142, '2024-02-25 15:00:27', 42, '{\"size\":\"128gb\"}', '619659185091'),
(6, 'King Oil 25 liters', 300, 55000, 300, 143, '2024-02-25 16:24:18', 43, '{\"size\" : \"25 liters\" , \"color\" : \"white\"}', ''),
(7, 'King Oil 1 liter liters', 2600, 2600, 300, 143, '2024-02-25 16:55:53', 43, '{\"size\":\"1 liter\", \"color\":\"brown\"}', '6154000016678'),
(9, 'Chivita Aplle Juice', 400, 11000, 200, 144, '2024-02-25 19:55:54', 4, '{\"size\":\"1 liter\"}', ''),
(10, 'Eva drinking water 75cl (One catton)', 300, 1499, 34, 145, '2024-02-25 20:30:19', 3, '{\"size\":\"75cl\"}', ''),
(11, 'Hand Bag 27 Light Brown', 20, 18000, 30, 146, '2024-02-25 21:06:46', 44, '{\"size\":\"medium small\",\"color\":\"#FFFDD0\"\n}', ''),
(12, 'crocks rubber shoe', 10, 30000, 10, 147, '2024-02-25 21:22:04', 30, '{\"size\":\"44\",\"size region\":\"uk\", \"color\":\"#555095\"}', ''),
(13, 'High Quality Banquet Chair Arched Back Gold Frame Red Speckle Cloth', 400, 18000, 10, 149, '2024-02-25 21:40:15', 27, '{\"color\":\"red\"}', ''),
(14, 'Beautiful Ladies Full Bra 1piece\r\n', 400, 8000, 300, 150, '2024-02-26 08:43:53', 45, '{\"color\":\"blue\", \"size\":\"31B\"}\r\n', ''),
(15, 'Big Bull Rice 25kg', 400, 49000, 10, 151, '2024-03-21 20:26:16', 46, '{\"size\":\"25kg\"}', ''),
(16, 'Big Bull Per boiled Rice 50kg', 400, 90000, 0, 152, '2024-03-21 20:32:00', 46, '{\"size\":\"50kg\"}', ''),
(17, 'Big Bull per boiled rice 10kg ', 400, 18000, 400, 153, '2024-03-21 20:45:44', 46, '{\"size\":\"10kg\"}', ''),
(18, 'Hisense 50\' Inches Smart UHD 4K TV (50A6K) - Black +1 Year Warranty', 5, 500000, 5, 154, '2024-03-22 15:40:33', 47, '{\"size\":\" 50inch\", \"color\":\"black\"}', ''),
(19, 'Hp EliteBook 840 G6 Intel Core I5 Touchscreen 16GB RAM/512GB SSD/Backlit Keyboard/FP Win 11 Pro +BAG', 40, 680000, 10, 155, '2024-03-23 21:33:45', 21, '{\"color\": \"sliver\"}', ''),
(20, 'Furgle Pro Series Gaming Chair With Footrest', 9, 280000, 9, 156, '2024-03-23 21:44:52', 48, '{\"size\":\"blue\"}', ''),
(21, 'Nothing Phone (2a) 5G (Black, 128 GB)  (8 GB RAM)', 400, 700000, 10, 157, '2024-03-23 22:14:54', 49, '{\"size\":\"black\"}', ''),
(22, 'iphone 14 ', 9, 1250000, 9, 159, '2024-03-24 16:57:13', 50, '{\"size\": \"128gb\", \"color\": \"yellow\"}', ''),
(23, 'Hisense 198 Litres Chest Freezer (FC 260SH) - Silver\r\n', 9, 335000, 9, 160, '2024-03-24 17:37:02', 51, '{\"color\":\"#808080\"}', ''),
(24, 'Haier Thermocool 200 Litres Chest Freezer (HTF-200) - Silver + 3 Years Warranty', 400, 350000, 9, 161, '2024-03-24 21:40:41', 53, '{\"color\":\"#616161\"}', ''),
(25, 'Skyrun 200 Litres Chest Freezer (BD-200A) - Grey\r\n', 400, 260000, 300, 162, '2024-03-25 20:34:30', 54, '{\"color\":\"grey\"}', ''),
(26, 'Skyrun 180 Litres Upright Freezer (BDL-180HC) - Silver', 0, 285000, 0, 163, '2024-03-25 21:08:52', 54, '{\"color\":\"grey\"}', ''),
(27, 'Hisense 95 Litres Chest Freezer (FRZ FC 120SH) - Silver', 9, 250000, 9, 164, '2024-03-25 21:21:52', 51, '{\"color\":\"grey\"}', ''),
(28, 'Skyrun 200 Litres Chest Freezer (BD-200HNW) - Grey', 0, 280000, 0, 165, '2024-03-26 21:50:41', 54, '{\"color\":\"grey\"}', ''),
(29, 'Apple iPad Pro 12.9-inch (6th Generation): with M2 chip, Liquid Retina XDR Display, 256GB, Wi-Fi 6E + 5G Cellular. Display Resolution 2732 x 2048 Pixels', 2, 1700000, 5, 166, '2024-03-27 21:12:30', 56, '{\"color\":\"grey\"}', ''),
(30, 'Apple iPhone 15 Plus (128 GB) - Pink Boost Infinite plan required starting at $60/mo.  Unlimited Wireless | Get the latest iPhone every year', 8, 1199000, 8, 167, '2024-03-27 21:45:49', 50, '{\"color\": \"pink\"}', ''),
(32, '\r\nApple iPhone 15 Plus (128 GB) - Black.\r\nDigital Storage Capacity:128 GB\r\n', 9, 1200000, 7, 168, '2024-03-27 22:07:22', 50, '{\"color\":\"black\"}', ''),
(39, 'Jameson Black Barrel 70cl', 4, 32000, 0, 179, '2024-04-04 21:45:09', 7, '{\"size\":\"750ml\"}', ''),
(40, 'Hisense FRZ FC 340FC 250 LITRES CHEST FREEZER\r\n', 40, 380000, 44, 180, '2024-04-10 17:52:49', 51, '{\"color\": \"white\"}', ''),
(41, 'Hennessy is the best selling cognac.', 400, 380000, 9, 181, '2024-04-10 21:08:10', 7, '{\"size\":\"70cl\"}', ''),
(42, 'Jameson Irish Whiskey - 70cl - 40% acl. - Single Bottle', 800, 20000, 9, 182, '2024-04-11 17:38:21', 7, '{\"size\":\"70cl\"}', ''),
(43, 'Inspired by the original gentleman distiller and our founder, Gentleman Jack undergoes a second charcoal mellowing to achieve exceptional smoothness. Its balanced flavour is perfect for celebrating life’s extraordinary occasions, plus all the moments along the way.', 900, 33000, 7, 183, '2024-04-11 18:23:16', 7, '{\"size\":\"70cl\"}', ''),
(44, 'Remy Martin 70cl VSOP - Single Bottle', 90, 52000, 100, 184, '2024-04-12 15:51:44', 7, '{\"size\":\"70cl\"}', ''),
(45, 'XIAOMI Redmi 13C', 5, 152000, 10, 185, '2024-04-17 20:06:54', 61, '{\"color\":\"green\"}', ''),
(46, 'Martell Cognac Blue Swift 75cl (VSOP)', 5, 76000, 10, 186, '2024-04-17 21:14:02', 57, '{\"size\":\"75cl\"}', ''),
(47, 'Absolut Vodka Original 1L', 5, 12000, 10, 187, '2024-04-17 21:14:02', 62, '{\"size\":\"75cl\"}', ''),
(48, 'Absolut Mandrin 1L', 5, 12000, 10, 188, '2024-04-22 13:16:01', 57, '{\"size\":\"75cl\"}', ''),
(49, 'Absolut Wild Berri 1L', 5, 12000, 10, 189, '2024-04-22 13:16:01', 62, '{\"size\":\"75cl\"}', ''),
(50, 'Absolut Citron', 5, 12000, 10, 190, '2024-04-22 13:51:22', 62, '{\"size\":\"75cl\"}', ''),
(51, 'Absolut Lime', 5, 12000, 10, 191, '2024-04-22 13:16:01', 62, '{\"size\":\"75cl\"}', ''),
(52, 'Absolut Vanilia Vodka', 5, 12000, 10, 192, '2024-04-22 13:16:02', 62, '{\"size\":\"75cl\"}', ''),
(53, 'Martell Cognac VS Single Distillery 70cl', 5, 76000, 10, 193, '2024-04-22 13:16:02', 57, '{\"size\":\"75cl\"}', ''),
(54, 'Oraimo 20000mAh Power Charging Bank Fast Charging OPB-P208DN', 10, 21000, 10, 195, '2024-04-22 21:09:29', 65, '{\"color\":\"black\"}', ''),
(55, 'Oraimo 10000mAh Power-Bank 2.1A For 2 Device Same Time OPB-P110DN', 10, 9000, 10, 196, '2024-04-22 21:09:30', 65, '{\"color\":\"black\"}', ''),
(56, 'Oraimo 20,000MAH Type C & USB Port Powerbank', 10, 16200, 10, 197, '2024-04-22 21:09:31', 65, '{\"color\":\"black\"}', ''),
(57, 'Oraimo 10000mah Power-Bank 2.4A Fast Charging OPB-P118D', 10, 11000, 10, 198, '2024-04-22 21:09:31', 65, '{\"color\":\"black\"}', ''),
(58, 'Oraimo Dual USB Output 204D Power-Bank 20000mAh Fast Charging', 10, 19000, 10, 199, '2024-04-22 21:09:31', 65, '{\"color\":\"black\"}', ''),
(59, 'Oraimo 30000mah Massive Ultra Two-way Fast Powerbank', 10, 33000, 10, 200, '2024-04-22 21:09:32', 65, '{\"color\":\"black\"}', ''),
(60, 'Oraimo 40000mah Laptop Power Bank 22.5W Digital Display', 10, 51000, 10, 201, '2024-04-22 21:09:32', 65, '{\"color\":\"black\"}', ''),
(61, 'Oraimo 10000mAh 12W Fast Charge Power-Bank', 10, 14500, 10, 202, '2024-04-22 21:09:32', 65, '{\"color\":\"black\"}', ''),
(62, 'Oraimo 30000Mah High Speed Fast Charging Power Bank', 10, 32000, 10, 203, '2024-04-22 21:09:32', 65, '{\"color\":\"black\"}', ''),
(63, 'Oraimo Traveler Link 27 27000mAh 3 Built-in Charging Cables AniFast 12W Fast Charge', 10, 31400, 10, 204, '2024-04-22 21:09:32', 65, '{\"color\":\"black\"}', ''),
(64, 'Oraimo 22.5W LED Light Super Fast 50000mA Power Bank + Free Charger', 10, 85000, 10, 205, '2024-04-22 21:09:33', 65, '{\"color\":\"black\"}', ''),
(65, 'Oraimo 40000mAh Strong Massive Power Bank With LED Light', 10, 58000, 10, 206, '2024-04-22 21:09:33', 65, '{\"color\":\"black\"}', ''),
(66, 'Oraimo PowerBox-600 60000m-A-h 22.5W Super Power Bank', 10, 100000, 10, 207, '2024-04-22 21:09:34', 65, '{\"color\":\"black\"}', ''),
(67, 'Oraimo MagPower 5000mAh Magnetic Wireless Power Bank', 10, 80000, 10, 208, '2024-04-22 21:09:34', 65, '{\"color\":\"black\"}', ''),
(68, 'Oraimo 22.5W Super Fast 5 Output Port LED Light 60000mA Power Bank + Free Charger', 10, 135000, 10, 209, '2024-04-22 21:09:34', 65, '{\"color\":\"black\"}', ''),
(69, 'Realme earbuds ORAIMO FREEPODS Bluetooth Earbuds Wireless Stereo Earphones Earp?ds', 10, 30000, 10, 210, '2024-04-25 09:58:29', 67, '{\"color\":\"black\"}', ''),
(70, 'Oraimo Rock Long Playtime 2-mic ENC TWS True Wireless Earbuds', 10, 17800, 10, 211, '2024-04-25 10:05:29', 67, '{\"color\":\"black\"}', ''),
(71, 'Oraimo Rhyme ANC Active Noise Cancellation ENC Noise Cancellation True Wireless Earbuds', 10, 34000, 10, 212, '2024-04-25 10:05:30', 67, '{\"color\":\"black\"}', ''),
(72, 'Oraimo BURNA BOY Space Pod Noise Cancellation Earbud', 10, 60000, 10, 213, '2024-04-25 10:05:30', 67, '{\"color\":\"black\"}', ''),
(73, 'Oraimo FreePods Pro ANC Active Noise Cancellation Wireless Earbuds', 10, 64600, 10, 214, '2024-04-25 10:05:31', 67, '{\"color\":\"black\"}', ''),
(74, 'Oraimo FreePods 4 Active Noise Cancellation Earbuds', 10, 35300, 10, 215, '2024-04-25 10:05:32', 67, '{\"color\":\"black\"}', ''),
(75, 'Oraimo FreePods Lite 40-hour Playtime ENC True Wireless Earbuds', 10, 15600, 10, 216, '2024-04-25 10:05:33', 67, '{\"color\":\"black\"}', ''),
(76, 'Oraimo FreePods 3C ENC Calling Noise Cancellation True Wireless Earbuds', 10, 24000, 10, 217, '2024-04-25 10:05:33', 67, '{\"color\":\"black\"}', ''),
(77, 'Oraimo Riff 2 ENC True Wireless Earbuds With APP Control', 10, 23000, 10, 218, '2024-04-25 10:05:34', 67, '{\"color\":\"black\"}', ''),
(78, 'Oraimo Riff True Wireless Earbuds - Red', 10, 24000, 10, 219, '2024-04-25 10:05:35', 67, '{\"color\":\"black\"}', ''),
(79, 'Oraimo Havy Base with long lasting battery SHARK 4 NECKLACE EARBUD', 10, 21900, 10, 220, '2024-04-25 10:05:36', 67, '{\"color\":\"black\"}', ''),
(80, 'Oraimo Air Buds-3S Super Bass True Wireless Stereo Smart Earbuds', 10, 34000, 10, 221, '2024-04-25 10:05:37', 67, '{\"color\":\"black\"}', ''),
(81, 'Oraimo Air 12 Pro Fingerprint Earbuds + Inbuilt Power Bank', 10, 28000, 10, 222, '2024-04-25 10:05:37', 67, '{\"color\":\"black\"}', ''),
(82, 'Oraimo Wireless FreePods Lite 40-hour Playtime ENC True Wireless Earbuds - sky blue', 10, 21000, 10, 223, '2024-04-25 10:05:38', 67, '{\"color\":\"black\"}', ''),
(83, 'Oraimo Air-Buds 4 ENC True Wireless Earbuds', 10, 45000, 10, 224, '2024-04-25 10:05:38', 67, '{\"color\":\"black\"}', ''),
(84, 'Jbl Premium Quality- Jbl MG-S22 Wireless Bluetooth Earbud', 10, 17500, 10, 225, '2024-04-25 10:05:39', 68, '{\"color\":\"black\"}', ''),
(85, 'Realme earbuds Wireless Earbuds Bluetooth 5.0 Earphones 6D Bass Earphones', 10, 10000, 10, 226, '2024-04-25 10:05:40', 69, '{\"color\":\"black\"}', ''),
(86, 'Realme earbuds NEWAGE EarPhones Bluetooth For Android And Apple Earbuds Phone Earpiece Hear 5.0 Wireless Earp?ds Headphones A?rpods', 10, 20000, 10, 227, '2024-04-25 10:05:40', 69, '{\"color\":\"black\"}', ''),
(87, 'Realme earbuds Bluetooth Earbuds With Powerbank Wireless Earbud Bluetooth 5 0 Earphone Microphone', 10, 10000, 10, 228, '2024-04-25 10:05:41', 69, '{\"color\":\"black\"}', ''),
(88, 'Realme earbuds Bluetooth Earpiece Wireless Earbuds 8D Earp?ds Stereo Bass Earphones Earpiece', 10, 8000, 10, 229, '2024-04-25 10:05:41', 69, '{\"color\":\"black\"}', ''),
(89, 'Realme earbuds Blu?tooth W?reless Earphones Headphones Earpiece Noise Cancellation Stereo Earp?ds Bass Earpiece Wireless Earbuds Headset', 10, 20000, 10, 230, '2024-04-25 10:05:42', 69, '{\"color\":\"black\"}', ''),
(90, 'Realme earbuds Wireless One Ear Earbuds Bluetooth Earpiece Single Earp?ds Headphones Earphones', 10, 10000, 10, 231, '2024-04-25 10:05:42', 69, '{\"color\":\"white\"}', ''),
(91, 'Realme earbuds Itel Wireless Earbuds Bluetooth Earpiece', 10, 12000, 10, 232, '2024-04-25 10:05:43', 69, '{\"color\":\"black\"}', ''),
(92, 'Realme earbuds Sleek Wireless Earbuds Bluetooth Headphones Earpod Earpiece Fingerprint Touch Control Bass Iphone Headset', 10, 17500, 10, 233, '2024-04-25 10:38:08', 69, '{\"color\":\"black\"}', ''),
(93, 'Realme earbuds NEWAGE Wireless Earbuds Bluetooth Headphones 5.0 Earpods 6D Bass Airpods Earphones', 10, 17000, 10, 234, '2024-04-25 10:05:43', 69, '{\"color\":\"black\"}', ''),
(94, 'Realme earbuds NEWAGE Bluetooth Wireless Earp?ds Touch Control 6D Ear Pod Iphone Stereo Bass Earbuds Headphones Earphones With Display Headset', 10, 16500, 10, 235, '2024-04-25 10:05:43', 69, '{\"color\":\"black\"}', ''),
(95, 'Realme earbuds Wireless Bluetooth Gaming Headset Earbuds Headphone', 10, 26000, 10, 235, '2024-04-25 10:05:43', 69, '{\"color\":\"black\"}', ''),
(98, 'Wolf Blass Cabernet Sauv 750ml\r\n', 10, 12000, 10, 238, '2024-04-25 21:13:36', 1, '{\"size\":\"75cl\"}', '');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_item_image`
--

CREATE TABLE `inventory_item_image` (
  `inventory_item_image_id` int(11) NOT NULL,
  `image_name` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_primary` int(11) NOT NULL DEFAULT 0,
  `inventory_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_general_ci;

--
-- Dumping data for table `inventory_item_image`
--

INSERT INTO `inventory_item_image` (`inventory_item_image_id`, `image_name`, `image_path`, `is_primary`, `inventory_item_id`) VALUES
(1, '1708872217.jpg', 'products/product-142/product-142-image/inventory-142-2/1708872217.jpg', 1, 2),
(4, '1708873227.jpg', 'products/product-142/product-142-image/inventory-142-5/1708873227.jpg', 1, 5),
(5, '1708878258.jpg', 'products/product-143/product-143-image/inventory-143-6/1708878258.jpg', 1, 6),
(8, '1708890954.jpg', 'products/product-144/product-144-image/inventory-144-9/1708890954.jpg', 1, 9),
(9, '1708880177.jpg', 'products/product-143/product-143-image/inventory-143-7/1708880153.jpg', 1, 7),
(10, '1708893020.jpg', 'products/product-145/product-145-image/inventory-145-10/1708893020.jpg', 1, 10),
(11, '1708895206.jpg', 'products/product-146/product-146-image/inventory-146-11/1708895206.jpg', 1, 11),
(12, '1708896124.jpg', 'products/product-147/product-147-image/inventory-147-12/1708896124.jpg', 1, 12),
(13, '1708897215.jpg', 'products/product-149/product-149-image/inventory-149-13/1708897215.jpg', 1, 13),
(14, '1708937034.jpg', 'products/product-150/product-150-image/inventory-150-14/1708937034.jpg', 1, 14),
(15, '1711052777.jpg', 'products/product-151/product-151-image/inventory-151-15/1711052777.jpg', 1, 15),
(16, '1711053120.jpg', 'products/product-152/product-152-image/inventory-152-16/1711053120.jpg', 1, 16),
(17, '1711053944.jpg', 'products/product-153/product-153-image/inventory-153-17/1711053944.jpg', 1, 17),
(18, '1711122034.jpg', 'products/product-154/product-154-image/inventory-154-18/1711122034.jpg', 1, 18),
(19, '1711122035.jpg', 'products/product-154/product-154-image/inventory-154-18/1711122035.jpg', 0, 18),
(20, '1711122036.jpg', 'products/product-154/product-154-image/inventory-154-18/1711122036.jpg', 0, 18),
(21, '1711122037.jpg', 'products/product-154/product-154-image/inventory-154-18/1711122037.jpg', 0, 18),
(22, '1711122038.jpg', 'products/product-154/product-154-image/inventory-154-18/1711122038.jpg', 0, 18),
(23, '1711229625.jpg', 'products/product-155/product-155-image/inventory-155-19/1711229625.jpg', 1, 19),
(24, '1711229626.jpg', 'products/product-155/product-155-image/inventory-155-19/1711229626.jpg', 0, 19),
(25, '1711229627.jpg', 'products/product-155/product-155-image/inventory-155-19/1711229627.jpg', 0, 19),
(26, '1711230293.jpg', 'products/product-156/product-156-image/inventory-156-20/1711230293.jpg', 1, 20),
(27, '1711232095.jpg', 'products/product-157/product-157-image/inventory-157-21/1711232095.jpg', 1, 21),
(28, '1711232096.jpg', 'products/product-157/product-157-image/inventory-157-21/1711232096.jpg', 0, 21),
(29, '1711299434.jpg', 'products/product-159/product-159-image/inventory-159-22/1711299434.jpg', 1, 22),
(30, '1711301823.jpg', 'products/product-160/product-160-image/inventory-160-23/1711301823.jpg', 1, 23),
(31, '1711316442.jpg', 'products/product-161/product-161-image/inventory-161-24/1711316442.jpg', 1, 24),
(32, '1711316443.jpg', 'products/product-161/product-161-image/inventory-161-24/1711316443.jpg', 0, 24),
(33, '1711316444.jpg', 'products/product-161/product-161-image/inventory-161-24/1711316444.jpg', 0, 24),
(34, '1711316445.jpg', 'products/product-161/product-161-image/inventory-161-24/1711316445.jpg', 0, 24),
(35, '1711316446.jpg', 'products/product-161/product-161-image/inventory-161-24/1711316446.jpg', 0, 24),
(36, '1711316447.jpg', 'products/product-161/product-161-image/inventory-161-24/1711316447.jpg', 0, 24),
(37, '1711316448.jpg', 'products/product-161/product-161-image/inventory-161-24/1711316448.jpg', 0, 24),
(38, '1711316449.jpg', 'products/product-161/product-161-image/inventory-161-24/1711316449.jpg', 0, 24),
(39, '1711316450.jpg', 'products/product-161/product-161-image/inventory-161-24/1711316450.jpg', 0, 24),
(40, '1711316451.jpg', 'products/product-161/product-161-image/inventory-161-24/1711316451.jpg', 0, 24),
(41, '1711316452.jpg', 'products/product-161/product-161-image/inventory-161-24/1711316452.jpg', 0, 24),
(42, '1711398870.jpg', 'products/product-162/product-162-image/inventory-162-25/1711398870.jpg', 0, 25),
(43, '1711398871.jpg', 'products/product-162/product-162-image/inventory-162-25/1711398871.jpg', 1, 25),
(44, '1711400932.jpg', 'products/product-163/product-163-image/inventory-163-26/1711400932.jpg', 1, 26),
(45, '1711401713.jpg', 'products/product-164/product-164-image/inventory-164-27/1711401713.jpg', 1, 27),
(46, '1711401714.jpg', 'products/product-164/product-164-image/inventory-164-27/1711401714.jpg', 0, 27),
(47, '1711489841.jpg', 'products/product-165/product-165-image/inventory-165-28/1711489841.jpg', 1, 28),
(48, '1711573950.jpg', 'products/product-166/product-166-image/inventory-166-29/1711573950.jpg', 0, 29),
(49, '1711573951.jpg', 'products/product-166/product-166-image/inventory-166-29/1711573951.jpg', 1, 29),
(50, '1711575949.jpg', 'products/product-167/product-167-image/inventory-167-30/1711575949.jpg', 1, 30),
(52, '1711577243.jpg', 'products/product-168/product-168-image/inventory-168-32/1711577243.jpg', 0, 32),
(53, '1711577244.jpg', 'products/product-168/product-168-image/inventory-168-32/1711577244.jpg', 1, 32),
(54, '1711577245.jpg', 'products/product-168/product-168-image/inventory-168-32/1711577245.jpg', 0, 32),
(57, '1712267110.jpg', 'products/product-179/product-179-image/inventory-179-39/1712267110.jpg', 1, 39),
(58, '1712267111.jpg', 'products/product-179/product-179-image/inventory-179-39/1712267111.jpg', 0, 39),
(59, '1712771569.jpg', 'products/product-180/product-180-image/inventory-180-40/1712771569.jpg', 0, 40),
(60, '1712771570.jpg', 'products/product-180/product-180-image/inventory-180-40/1712771570.jpg', 1, 40),
(61, '1712783290.jpg', 'products/product-181/product-181-image/inventory-181-41/1712783290.jpg', 1, 41),
(62, '1712857102.jpg', 'products/product-182/product-182-image/inventory-182-42/1712857102.jpg', 1, 42),
(63, '1712859796.jpg', 'products/product-183/product-183-image/inventory-183-43/1712859796.jpg', 1, 43),
(64, '1712937105.jpg', 'products/product-184/product-184-image/inventory-184-44/1712937105.jpg', 1, 44),
(722, '66202bde20218.jpg', 'products/product-185/product-185-image/inventory-185-45/66202bde20218.jpg', 0, 45),
(723, '66202bde2e254.jpg', 'products/product-185/product-185-image/inventory-185-45/66202bde2e254.jpg', 1, 45),
(724, '66202bde3ad62.jpg', 'products/product-185/product-185-image/inventory-185-45/66202bde3ad62.jpg', 0, 45),
(725, '66202bde4724a.jpg', 'products/product-185/product-185-image/inventory-185-45/66202bde4724a.jpg', 0, 45),
(726, '66202bde53548.jpg', 'products/product-185/product-185-image/inventory-185-45/66202bde53548.jpg', 0, 45),
(727, '66203b9a4b622.jpg', 'products/product-186/product-186-image/inventory-186-46/66203b9a4b622.jpg', 1, 46),
(728, '66203b9a5a3c9.jpg', 'products/product-187/product-187-image/inventory-187-47/66203b9a5a3c9.jpg', 1, 47),
(750, '662663119bd65.jpg', 'products/product-188/product-188-image/inventory-188-48/662663119bd65.jpg', 1, 48),
(751, '66266311aa39d.jpg', 'products/product-188/product-188-image/inventory-188-48/66266311aa39d.jpg', 0, 48),
(752, '66266311b7737.jpg', 'products/product-189/product-189-image/inventory-189-49/66266311b7737.jpg', 1, 49),
(753, '66266311caaf0.jpg', 'products/product-189/product-189-image/inventory-189-49/66266311caaf0.jpg', 0, 49),
(754, '66266311df59b.jpg', 'products/product-191/product-191-image/inventory-191-51/66266311df59b.jpg', 1, 51),
(755, '6626631201c8a.jpg', 'products/product-191/product-191-image/inventory-191-51/6626631201c8a.jpg', 0, 51),
(756, '6626631215b07.jpg', 'products/product-192/product-192-image/inventory-192-52/6626631215b07.jpg', 1, 52),
(757, '6626631225280.jpg', 'products/product-193/product-193-image/inventory-193-53/6626631225280.jpg', 1, 53),
(759, '66266b5a14533.jpg', 'products/product-190/product-190-image/inventory-190-50/66266b5a14533.jpg', 1, 50),
(768, '6626d2096ee8f.jpg', 'products/product-195/product-195-image/inventory-195-54/6626d2096ee8f.jpg', 1, 54),
(769, '6626d2097c178.jpg', 'products/product-195/product-195-image/inventory-195-54/6626d2097c178.jpg', 0, 54),
(770, '6626d209895b3.jpg', 'products/product-195/product-195-image/inventory-195-54/6626d209895b3.jpg', 0, 54),
(771, '6626d20996395.jpg', 'products/product-195/product-195-image/inventory-195-54/6626d20996395.jpg', 0, 54),
(772, '6626d209a3d63.jpg', 'products/product-195/product-195-image/inventory-195-54/6626d209a3d63.jpg', 0, 54),
(773, '6626d209b3efc.jpg', 'products/product-195/product-195-image/inventory-195-54/6626d209b3efc.jpg', 0, 54),
(774, '6626d209c0bdf.jpg', 'products/product-195/product-195-image/inventory-195-54/6626d209c0bdf.jpg', 0, 54),
(775, '6626d209cd4c9.jpg', 'products/product-195/product-195-image/inventory-195-54/6626d209cd4c9.jpg', 0, 54),
(776, '6626d209dbc13.jpg', 'products/product-195/product-195-image/inventory-195-54/6626d209dbc13.jpg', 0, 54),
(777, '6626d209e96fe.jpg', 'products/product-195/product-195-image/inventory-195-54/6626d209e96fe.jpg', 0, 54),
(778, '6626d20a02bb5.jpg', 'products/product-195/product-195-image/inventory-195-54/6626d20a02bb5.jpg', 0, 54),
(779, '6626d20a10620.jpg', 'products/product-195/product-195-image/inventory-195-54/6626d20a10620.jpg', 0, 54),
(780, '6626d20a1da83.jpg', 'products/product-195/product-195-image/inventory-195-54/6626d20a1da83.jpg', 0, 54),
(781, '6626d20a2acb7.jpg', 'products/product-195/product-195-image/inventory-195-54/6626d20a2acb7.jpg', 0, 54),
(782, '6626d20a3984c.jpg', 'products/product-195/product-195-image/inventory-195-54/6626d20a3984c.jpg', 0, 54),
(783, '6626d20a4702d.jpg', 'products/product-195/product-195-image/inventory-195-54/6626d20a4702d.jpg', 0, 54),
(784, '6626d20a5315a.jpg', 'products/product-196/product-196-image/inventory-196-55/6626d20a5315a.jpg', 1, 55),
(785, '6626d20a5f820.jpg', 'products/product-196/product-196-image/inventory-196-55/6626d20a5f820.jpg', 0, 55),
(786, '6626d20a6c7dc.jpg', 'products/product-196/product-196-image/inventory-196-55/6626d20a6c7dc.jpg', 0, 55),
(787, '6626d20a7a9ce.jpg', 'products/product-196/product-196-image/inventory-196-55/6626d20a7a9ce.jpg', 0, 55),
(788, '6626d20a87415.jpg', 'products/product-196/product-196-image/inventory-196-55/6626d20a87415.jpg', 0, 55),
(789, '6626d20a93bfd.jpg', 'products/product-196/product-196-image/inventory-196-55/6626d20a93bfd.jpg', 0, 55),
(790, '6626d20a9f91b.jpg', 'products/product-196/product-196-image/inventory-196-55/6626d20a9f91b.jpg', 0, 55),
(791, '6626d20aac895.jpg', 'products/product-196/product-196-image/inventory-196-55/6626d20aac895.jpg', 0, 55),
(792, '6626d20aba885.jpg', 'products/product-196/product-196-image/inventory-196-55/6626d20aba885.jpg', 0, 55),
(793, '6626d20ac8084.jpg', 'products/product-196/product-196-image/inventory-196-55/6626d20ac8084.jpg', 0, 55),
(794, '6626d20ad5529.jpg', 'products/product-196/product-196-image/inventory-196-55/6626d20ad5529.jpg', 0, 55),
(795, '6626d20ae2a03.jpg', 'products/product-196/product-196-image/inventory-196-55/6626d20ae2a03.jpg', 0, 55),
(796, '6626d20aefb29.jpg', 'products/product-196/product-196-image/inventory-196-55/6626d20aefb29.jpg', 0, 55),
(797, '6626d20b07e20.jpg', 'products/product-196/product-196-image/inventory-196-55/6626d20b07e20.jpg', 0, 55),
(798, '6626d20b16155.jpg', 'products/product-197/product-197-image/inventory-197-56/6626d20b16155.jpg', 1, 56),
(799, '6626d20b1f6d5.jpg', 'products/product-197/product-197-image/inventory-197-56/6626d20b1f6d5.jpg', 0, 56),
(800, '6626d20b2c71a.jpg', 'products/product-197/product-197-image/inventory-197-56/6626d20b2c71a.jpg', 0, 56),
(801, '6626d20b3aad7.jpg', 'products/product-198/product-198-image/inventory-198-57/6626d20b3aad7.jpg', 1, 57),
(802, '6626d20b47a77.jpg', 'products/product-198/product-198-image/inventory-198-57/6626d20b47a77.jpg', 0, 57),
(803, '6626d20b56849.jpg', 'products/product-198/product-198-image/inventory-198-57/6626d20b56849.jpg', 0, 57),
(804, '6626d20b64394.jpg', 'products/product-198/product-198-image/inventory-198-57/6626d20b64394.jpg', 0, 57),
(805, '6626d20b7164a.jpg', 'products/product-198/product-198-image/inventory-198-57/6626d20b7164a.jpg', 0, 57),
(806, '6626d20b8014d.jpg', 'products/product-198/product-198-image/inventory-198-57/6626d20b8014d.jpg', 0, 57),
(807, '6626d20b8dd22.jpg', 'products/product-198/product-198-image/inventory-198-57/6626d20b8dd22.jpg', 0, 57),
(808, '6626d20b9b34c.jpg', 'products/product-198/product-198-image/inventory-198-57/6626d20b9b34c.jpg', 0, 57),
(809, '6626d20ba87ca.jpg', 'products/product-199/product-199-image/inventory-199-58/6626d20ba87ca.jpg', 1, 58),
(810, '6626d20bb58bb.jpg', 'products/product-199/product-199-image/inventory-199-58/6626d20bb58bb.jpg', 0, 58),
(811, '6626d20bc3ce3.jpg', 'products/product-199/product-199-image/inventory-199-58/6626d20bc3ce3.jpg', 0, 58),
(812, '6626d20bd171c.jpg', 'products/product-199/product-199-image/inventory-199-58/6626d20bd171c.jpg', 0, 58),
(813, '6626d20bde998.jpg', 'products/product-199/product-199-image/inventory-199-58/6626d20bde998.jpg', 0, 58),
(814, '6626d20bec64a.jpg', 'products/product-199/product-199-image/inventory-199-58/6626d20bec64a.jpg', 0, 58),
(815, '6626d20c066ba.jpg', 'products/product-199/product-199-image/inventory-199-58/6626d20c066ba.jpg', 0, 58),
(816, '6626d20c1426d.jpg', 'products/product-199/product-199-image/inventory-199-58/6626d20c1426d.jpg', 0, 58),
(817, '6626d20c21297.jpg', 'products/product-200/product-200-image/inventory-200-59/6626d20c21297.jpg', 1, 59),
(818, '6626d20c30088.jpg', 'products/product-200/product-200-image/inventory-200-59/6626d20c30088.jpg', 0, 59),
(819, '6626d20c3f749.jpg', 'products/product-200/product-200-image/inventory-200-59/6626d20c3f749.jpg', 0, 59),
(820, '6626d20c4c918.jpg', 'products/product-201/product-201-image/inventory-201-60/6626d20c4c918.jpg', 1, 60),
(821, '6626d20c55171.jpg', 'products/product-201/product-201-image/inventory-201-60/6626d20c55171.jpg', 0, 60),
(822, '6626d20c64791.jpg', 'products/product-202/product-202-image/inventory-202-61/6626d20c64791.jpg', 1, 61),
(823, '6626d20c718fe.jpg', 'products/product-202/product-202-image/inventory-202-61/6626d20c718fe.jpg', 0, 61),
(824, '6626d20c803bc.jpg', 'products/product-203/product-203-image/inventory-203-62/6626d20c803bc.jpg', 1, 62),
(825, '6626d20c8cc6e.jpg', 'products/product-203/product-203-image/inventory-203-62/6626d20c8cc6e.jpg', 0, 62),
(826, '6626d20c9c2c2.jpg', 'products/product-203/product-203-image/inventory-203-62/6626d20c9c2c2.jpg', 0, 62),
(827, '6626d20cac500.jpg', 'products/product-203/product-203-image/inventory-203-62/6626d20cac500.jpg', 0, 62),
(828, '6626d20cba0d6.jpg', 'products/product-204/product-204-image/inventory-204-63/6626d20cba0d6.jpg', 1, 63),
(829, '6626d20cc768a.jpg', 'products/product-204/product-204-image/inventory-204-63/6626d20cc768a.jpg', 0, 63),
(830, '6626d20cd4eb7.jpg', 'products/product-204/product-204-image/inventory-204-63/6626d20cd4eb7.jpg', 0, 63),
(831, '6626d20ce1ee7.jpg', 'products/product-204/product-204-image/inventory-204-63/6626d20ce1ee7.jpg', 0, 63),
(832, '6626d20cf0764.jpg', 'products/product-204/product-204-image/inventory-204-63/6626d20cf0764.jpg', 0, 63),
(833, '6626d20d09578.jpg', 'products/product-204/product-204-image/inventory-204-63/6626d20d09578.jpg', 0, 63),
(834, '6626d20d16e31.jpg', 'products/product-204/product-204-image/inventory-204-63/6626d20d16e31.jpg', 0, 63),
(835, '6626d20d247b4.jpg', 'products/product-204/product-204-image/inventory-204-63/6626d20d247b4.jpg', 0, 63),
(836, '6626d20d3353a.jpg', 'products/product-204/product-204-image/inventory-204-63/6626d20d3353a.jpg', 0, 63),
(837, '6626d20d413da.jpg', 'products/product-205/product-205-image/inventory-205-64/6626d20d413da.jpg', 1, 64),
(838, '6626d20d4e9d0.jpg', 'products/product-205/product-205-image/inventory-205-64/6626d20d4e9d0.jpg', 0, 64),
(839, '6626d20d5c5f3.jpg', 'products/product-205/product-205-image/inventory-205-64/6626d20d5c5f3.jpg', 0, 64),
(840, '6626d20d6a7ce.jpg', 'products/product-205/product-205-image/inventory-205-64/6626d20d6a7ce.jpg', 0, 64),
(841, '6626d20d78e11.jpg', 'products/product-205/product-205-image/inventory-205-64/6626d20d78e11.jpg', 0, 64),
(842, '6626d20d8812f.jpg', 'products/product-205/product-205-image/inventory-205-64/6626d20d8812f.jpg', 0, 64),
(843, '6626d20d95fb3.jpg', 'products/product-205/product-205-image/inventory-205-64/6626d20d95fb3.jpg', 0, 64),
(844, '6626d20da44b8.jpg', 'products/product-205/product-205-image/inventory-205-64/6626d20da44b8.jpg', 0, 64),
(845, '6626d20db15c4.jpg', 'products/product-206/product-206-image/inventory-206-65/6626d20db15c4.jpg', 1, 65),
(846, '6626d20dba963.jpg', 'products/product-206/product-206-image/inventory-206-65/6626d20dba963.jpg', 0, 65),
(847, '6626d20dc974a.jpg', 'products/product-206/product-206-image/inventory-206-65/6626d20dc974a.jpg', 0, 65),
(848, '6626d20dd3191.jpg', 'products/product-206/product-206-image/inventory-206-65/6626d20dd3191.jpg', 0, 65),
(849, '6626d20de26e7.jpg', 'products/product-206/product-206-image/inventory-206-65/6626d20de26e7.jpg', 0, 65),
(850, '6626d20df055c.jpg', 'products/product-206/product-206-image/inventory-206-65/6626d20df055c.jpg', 0, 65),
(851, '6626d20e0ab22.jpg', 'products/product-206/product-206-image/inventory-206-65/6626d20e0ab22.jpg', 0, 65),
(852, '6626d20e17e30.jpg', 'products/product-206/product-206-image/inventory-206-65/6626d20e17e30.jpg', 0, 65),
(853, '6626d20e2538d.jpg', 'products/product-206/product-206-image/inventory-206-65/6626d20e2538d.jpg', 0, 65),
(854, '6626d20e3421e.jpg', 'products/product-207/product-207-image/inventory-207-66/6626d20e3421e.jpg', 1, 66),
(855, '6626d20e41c9a.jpg', 'products/product-207/product-207-image/inventory-207-66/6626d20e41c9a.jpg', 0, 66),
(856, '6626d20e4f167.jpg', 'products/product-208/product-208-image/inventory-208-67/6626d20e4f167.jpg', 1, 67),
(857, '6626d20e5aefe.jpg', 'products/product-208/product-208-image/inventory-208-67/6626d20e5aefe.jpg', 0, 67),
(858, '6626d20e63474.jpg', 'products/product-208/product-208-image/inventory-208-67/6626d20e63474.jpg', 0, 67),
(859, '6626d20e706c9.jpg', 'products/product-208/product-208-image/inventory-208-67/6626d20e706c9.jpg', 0, 67),
(860, '6626d20e7e27e.jpg', 'products/product-208/product-208-image/inventory-208-67/6626d20e7e27e.jpg', 0, 67),
(861, '6626d20e8b3d2.jpg', 'products/product-208/product-208-image/inventory-208-67/6626d20e8b3d2.jpg', 0, 67),
(862, '6626d20e99017.jpg', 'products/product-208/product-208-image/inventory-208-67/6626d20e99017.jpg', 0, 67),
(863, '6626d20ea65da.jpg', 'products/product-208/product-208-image/inventory-208-67/6626d20ea65da.jpg', 0, 67),
(864, '6626d20eb35ec.jpg', 'products/product-208/product-208-image/inventory-208-67/6626d20eb35ec.jpg', 0, 67),
(865, '6626d20ec124c.jpg', 'products/product-209/product-209-image/inventory-209-68/6626d20ec124c.jpg', 1, 68),
(866, '6626d20ecdca4.jpg', 'products/product-209/product-209-image/inventory-209-68/6626d20ecdca4.jpg', 0, 68),
(867, '6626d20ed95bf.jpg', 'products/product-209/product-209-image/inventory-209-68/6626d20ed95bf.jpg', 0, 68),
(999, '662a294590316.jpg', 'products/product-210/product-210-image/inventory-210-69/662a294590316.jpg', 1, 69),
(1000, '662a29459e746.jpg', 'products/product-210/product-210-image/inventory-210-69/662a29459e746.jpg', 0, 69),
(1001, '662a2945abb99.jpg', 'products/product-210/product-210-image/inventory-210-69/662a2945abb99.jpg', 0, 69),
(1002, '662a2945b9e18.jpg', 'products/product-210/product-210-image/inventory-210-69/662a2945b9e18.jpg', 0, 69),
(1003, '662a2945c6648.jpg', 'products/product-210/product-210-image/inventory-210-69/662a2945c6648.jpg', 0, 69),
(1004, '662a2945d47ca.jpg', 'products/product-210/product-210-image/inventory-210-69/662a2945d47ca.jpg', 0, 69),
(1005, '662a2945e174d.jpg', 'products/product-210/product-210-image/inventory-210-69/662a2945e174d.jpg', 0, 69),
(1006, '662a2945eec83.jpg', 'products/product-210/product-210-image/inventory-210-69/662a2945eec83.jpg', 0, 69),
(1007, '662a294607f85.jpg', 'products/product-210/product-210-image/inventory-210-69/662a294607f85.jpg', 0, 69),
(1008, '662a294618095.jpg', 'products/product-210/product-210-image/inventory-210-69/662a294618095.jpg', 0, 69),
(1009, '662a2946263e9.jpg', 'products/product-210/product-210-image/inventory-210-69/662a2946263e9.jpg', 0, 69),
(1010, '662a294633db0.jpg', 'products/product-210/product-210-image/inventory-210-69/662a294633db0.jpg', 0, 69),
(1011, '662a2946426d4.jpg', 'products/product-210/product-210-image/inventory-210-69/662a2946426d4.jpg', 0, 69),
(1012, '662a29464fbca.jpg', 'products/product-210/product-210-image/inventory-210-69/662a29464fbca.jpg', 0, 69),
(1013, '662a29465dbe4.jpg', 'products/product-210/product-210-image/inventory-210-69/662a29465dbe4.jpg', 0, 69),
(1014, '662a29466b745.jpg', 'products/product-210/product-210-image/inventory-210-69/662a29466b745.jpg', 0, 69),
(1015, '662a2ae91f56f.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2ae91f56f.jpg', 1, 70),
(1016, '662a2ae92a187.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2ae92a187.jpg', 0, 70),
(1017, '662a2ae9371d9.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2ae9371d9.jpg', 0, 70),
(1018, '662a2ae945677.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2ae945677.jpg', 0, 70),
(1019, '662a2ae95f539.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2ae95f539.jpg', 0, 70),
(1020, '662a2ae96dbd1.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2ae96dbd1.jpg', 0, 70),
(1021, '662a2ae97bd31.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2ae97bd31.jpg', 0, 70),
(1022, '662a2ae98afe8.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2ae98afe8.jpg', 0, 70),
(1023, '662a2ae993df3.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2ae993df3.jpg', 0, 70),
(1024, '662a2ae9a1db6.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2ae9a1db6.jpg', 0, 70),
(1025, '662a2ae9afa65.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2ae9afa65.jpg', 0, 70),
(1026, '662a2ae9bdc26.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2ae9bdc26.jpg', 0, 70),
(1027, '662a2ae9cbafc.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2ae9cbafc.jpg', 0, 70),
(1028, '662a2ae9db792.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2ae9db792.jpg', 0, 70),
(1029, '662a2ae9eab77.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2ae9eab77.jpg', 0, 70),
(1030, '662a2aea05691.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2aea05691.jpg', 0, 70),
(1031, '662a2aea14c32.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2aea14c32.jpg', 0, 70),
(1032, '662a2aea2363c.jpg', 'products/product-211/product-211-image/inventory-211-70/662a2aea2363c.jpg', 0, 70),
(1033, '662a2aea31664.jpg', 'products/product-212/product-212-image/inventory-212-71/662a2aea31664.jpg', 1, 71),
(1034, '662a2aea3f315.jpg', 'products/product-212/product-212-image/inventory-212-71/662a2aea3f315.jpg', 0, 71),
(1035, '662a2aea4e428.jpg', 'products/product-212/product-212-image/inventory-212-71/662a2aea4e428.jpg', 0, 71),
(1036, '662a2aea5ee24.jpg', 'products/product-212/product-212-image/inventory-212-71/662a2aea5ee24.jpg', 0, 71),
(1037, '662a2aea6da00.jpg', 'products/product-212/product-212-image/inventory-212-71/662a2aea6da00.jpg', 0, 71),
(1038, '662a2aea7c083.jpg', 'products/product-212/product-212-image/inventory-212-71/662a2aea7c083.jpg', 0, 71),
(1039, '662a2aea8ae84.jpg', 'products/product-212/product-212-image/inventory-212-71/662a2aea8ae84.jpg', 0, 71),
(1040, '662a2aea9966a.jpg', 'products/product-212/product-212-image/inventory-212-71/662a2aea9966a.jpg', 0, 71),
(1041, '662a2aeaa81e4.jpg', 'products/product-212/product-212-image/inventory-212-71/662a2aeaa81e4.jpg', 0, 71),
(1042, '662a2aeab6a84.jpg', 'products/product-212/product-212-image/inventory-212-71/662a2aeab6a84.jpg', 0, 71),
(1043, '662a2aeac6545.jpg', 'products/product-213/product-213-image/inventory-213-72/662a2aeac6545.jpg', 1, 72),
(1044, '662a2aead155a.jpg', 'products/product-213/product-213-image/inventory-213-72/662a2aead155a.jpg', 0, 72),
(1045, '662a2aeadee21.jpg', 'products/product-213/product-213-image/inventory-213-72/662a2aeadee21.jpg', 0, 72),
(1046, '662a2aeaed112.jpg', 'products/product-213/product-213-image/inventory-213-72/662a2aeaed112.jpg', 0, 72),
(1047, '662a2aeb061f8.jpg', 'products/product-213/product-213-image/inventory-213-72/662a2aeb061f8.jpg', 0, 72),
(1048, '662a2aeb10958.jpg', 'products/product-213/product-213-image/inventory-213-72/662a2aeb10958.jpg', 0, 72),
(1049, '662a2aeb1df27.jpg', 'products/product-213/product-213-image/inventory-213-72/662a2aeb1df27.jpg', 0, 72),
(1050, '662a2aeb2cf61.jpg', 'products/product-213/product-213-image/inventory-213-72/662a2aeb2cf61.jpg', 0, 72),
(1051, '662a2aeb3b11c.jpg', 'products/product-214/product-214-image/inventory-214-73/662a2aeb3b11c.jpg', 1, 73),
(1052, '662a2aeb4849b.jpg', 'products/product-214/product-214-image/inventory-214-73/662a2aeb4849b.jpg', 0, 73),
(1053, '662a2aeb55c17.jpg', 'products/product-214/product-214-image/inventory-214-73/662a2aeb55c17.jpg', 0, 73),
(1054, '662a2aeb62c67.jpg', 'products/product-214/product-214-image/inventory-214-73/662a2aeb62c67.jpg', 0, 73),
(1055, '662a2aeb738d7.jpg', 'products/product-214/product-214-image/inventory-214-73/662a2aeb738d7.jpg', 0, 73),
(1056, '662a2aeb829a8.jpg', 'products/product-214/product-214-image/inventory-214-73/662a2aeb829a8.jpg', 0, 73),
(1057, '662a2aeb90f0d.jpg', 'products/product-214/product-214-image/inventory-214-73/662a2aeb90f0d.jpg', 0, 73),
(1058, '662a2aeb9d70a.jpg', 'products/product-214/product-214-image/inventory-214-73/662a2aeb9d70a.jpg', 0, 73),
(1059, '662a2aebaa68a.jpg', 'products/product-214/product-214-image/inventory-214-73/662a2aebaa68a.jpg', 0, 73),
(1060, '662a2aebb7d01.jpg', 'products/product-214/product-214-image/inventory-214-73/662a2aebb7d01.jpg', 0, 73),
(1061, '662a2aebc6398.jpg', 'products/product-214/product-214-image/inventory-214-73/662a2aebc6398.jpg', 0, 73),
(1062, '662a2aebd3ff1.jpg', 'products/product-214/product-214-image/inventory-214-73/662a2aebd3ff1.jpg', 0, 73),
(1063, '662a2aebe12c9.jpg', 'products/product-214/product-214-image/inventory-214-73/662a2aebe12c9.jpg', 0, 73),
(1064, '662a2aebefc02.jpg', 'products/product-214/product-214-image/inventory-214-73/662a2aebefc02.jpg', 0, 73),
(1065, '662a2aec08a94.jpg', 'products/product-214/product-214-image/inventory-214-73/662a2aec08a94.jpg', 0, 73),
(1066, '662a2aec1717a.jpg', 'products/product-214/product-214-image/inventory-214-73/662a2aec1717a.jpg', 0, 73),
(1067, '662a2aec249b0.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aec249b0.jpg', 1, 74),
(1068, '662a2aec312fc.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aec312fc.jpg', 0, 74),
(1069, '662a2aec3f9a0.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aec3f9a0.jpg', 0, 74),
(1070, '662a2aec4dfd8.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aec4dfd8.jpg', 0, 74),
(1071, '662a2aec5eedc.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aec5eedc.jpg', 0, 74),
(1072, '662a2aec7028f.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aec7028f.jpg', 0, 74),
(1073, '662a2aec7cb10.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aec7cb10.jpg', 0, 74),
(1074, '662a2aec8a1a0.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aec8a1a0.jpg', 0, 74),
(1075, '662a2aec98548.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aec98548.jpg', 0, 74),
(1076, '662a2aeca72a1.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aeca72a1.jpg', 0, 74),
(1077, '662a2aecb5ee6.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aecb5ee6.jpg', 0, 74),
(1078, '662a2aecc4075.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aecc4075.jpg', 0, 74),
(1079, '662a2aecd206b.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aecd206b.jpg', 0, 74),
(1080, '662a2aecdf4af.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aecdf4af.jpg', 0, 74),
(1081, '662a2aecedf56.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aecedf56.jpg', 0, 74),
(1082, '662a2aed0c884.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aed0c884.jpg', 0, 74),
(1083, '662a2aed1c49c.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aed1c49c.jpg', 0, 74),
(1084, '662a2aed2f19c.jpg', 'products/product-215/product-215-image/inventory-215-74/662a2aed2f19c.jpg', 0, 74),
(1085, '662a2aed3cf06.jpg', 'products/product-216/product-216-image/inventory-216-75/662a2aed3cf06.jpg', 1, 75),
(1086, '662a2aed49a37.jpg', 'products/product-216/product-216-image/inventory-216-75/662a2aed49a37.jpg', 0, 75),
(1087, '662a2aed57e5e.jpg', 'products/product-216/product-216-image/inventory-216-75/662a2aed57e5e.jpg', 0, 75),
(1088, '662a2aed64a0d.jpg', 'products/product-216/product-216-image/inventory-216-75/662a2aed64a0d.jpg', 0, 75),
(1089, '662a2aed71ea1.jpg', 'products/product-216/product-216-image/inventory-216-75/662a2aed71ea1.jpg', 0, 75),
(1090, '662a2aed7e1d1.jpg', 'products/product-216/product-216-image/inventory-216-75/662a2aed7e1d1.jpg', 0, 75),
(1091, '662a2aed8bbf2.jpg', 'products/product-216/product-216-image/inventory-216-75/662a2aed8bbf2.jpg', 0, 75),
(1092, '662a2aed99a37.jpg', 'products/product-216/product-216-image/inventory-216-75/662a2aed99a37.jpg', 0, 75),
(1093, '662a2aeda88b5.jpg', 'products/product-216/product-216-image/inventory-216-75/662a2aeda88b5.jpg', 0, 75),
(1094, '662a2aedb6454.jpg', 'products/product-216/product-216-image/inventory-216-75/662a2aedb6454.jpg', 0, 75),
(1095, '662a2aedc2a35.jpg', 'products/product-216/product-216-image/inventory-216-75/662a2aedc2a35.jpg', 0, 75),
(1096, '662a2aedd00da.jpg', 'products/product-216/product-216-image/inventory-216-75/662a2aedd00da.jpg', 0, 75),
(1097, '662a2aeddcf3b.jpg', 'products/product-217/product-217-image/inventory-217-76/662a2aeddcf3b.jpg', 1, 76),
(1098, '662a2aedea604.jpg', 'products/product-217/product-217-image/inventory-217-76/662a2aedea604.jpg', 0, 76),
(1099, '662a2aee0334e.jpg', 'products/product-217/product-217-image/inventory-217-76/662a2aee0334e.jpg', 0, 76),
(1100, '662a2aee11e28.jpg', 'products/product-217/product-217-image/inventory-217-76/662a2aee11e28.jpg', 0, 76),
(1101, '662a2aee1fcc9.jpg', 'products/product-217/product-217-image/inventory-217-76/662a2aee1fcc9.jpg', 0, 76),
(1102, '662a2aee2e79d.jpg', 'products/product-217/product-217-image/inventory-217-76/662a2aee2e79d.jpg', 0, 76),
(1103, '662a2aee3c91a.jpg', 'products/product-217/product-217-image/inventory-217-76/662a2aee3c91a.jpg', 0, 76),
(1104, '662a2aee4cba9.jpg', 'products/product-217/product-217-image/inventory-217-76/662a2aee4cba9.jpg', 0, 76),
(1105, '662a2aee5b18c.jpg', 'products/product-217/product-217-image/inventory-217-76/662a2aee5b18c.jpg', 0, 76),
(1106, '662a2aee6d0dc.jpg', 'products/product-217/product-217-image/inventory-217-76/662a2aee6d0dc.jpg', 0, 76),
(1107, '662a2aee7c4f1.jpg', 'products/product-217/product-217-image/inventory-217-76/662a2aee7c4f1.jpg', 0, 76),
(1108, '662a2aee8b118.jpg', 'products/product-217/product-217-image/inventory-217-76/662a2aee8b118.jpg', 0, 76),
(1109, '662a2aeea95eb.jpg', 'products/product-217/product-217-image/inventory-217-76/662a2aeea95eb.jpg', 0, 76),
(1110, '662a2aeebb32e.jpg', 'products/product-217/product-217-image/inventory-217-76/662a2aeebb32e.jpg', 0, 76),
(1111, '662a2aeec8b68.jpg', 'products/product-217/product-217-image/inventory-217-76/662a2aeec8b68.jpg', 0, 76),
(1112, '662a2aeed9ef2.jpg', 'products/product-217/product-217-image/inventory-217-76/662a2aeed9ef2.jpg', 0, 76),
(1113, '662a2aeeea818.jpg', 'products/product-218/product-218-image/inventory-218-77/662a2aeeea818.jpg', 1, 77),
(1114, '662a2aeef3f58.jpg', 'products/product-218/product-218-image/inventory-218-77/662a2aeef3f58.jpg', 0, 77),
(1115, '662a2aef0edc0.jpg', 'products/product-218/product-218-image/inventory-218-77/662a2aef0edc0.jpg', 0, 77),
(1116, '662a2aef1c77b.jpg', 'products/product-218/product-218-image/inventory-218-77/662a2aef1c77b.jpg', 0, 77),
(1117, '662a2aef2b0df.jpg', 'products/product-218/product-218-image/inventory-218-77/662a2aef2b0df.jpg', 0, 77),
(1118, '662a2aef39402.jpg', 'products/product-218/product-218-image/inventory-218-77/662a2aef39402.jpg', 0, 77),
(1119, '662a2aef4af19.jpg', 'products/product-218/product-218-image/inventory-218-77/662a2aef4af19.jpg', 0, 77),
(1120, '662a2aef54623.jpg', 'products/product-218/product-218-image/inventory-218-77/662a2aef54623.jpg', 0, 77),
(1121, '662a2aef63135.jpg', 'products/product-218/product-218-image/inventory-218-77/662a2aef63135.jpg', 0, 77),
(1122, '662a2aef73146.jpg', 'products/product-218/product-218-image/inventory-218-77/662a2aef73146.jpg', 0, 77),
(1123, '662a2aef80bc4.jpg', 'products/product-218/product-218-image/inventory-218-77/662a2aef80bc4.jpg', 0, 77),
(1124, '662a2aef904c7.jpg', 'products/product-218/product-218-image/inventory-218-77/662a2aef904c7.jpg', 0, 77),
(1125, '662a2aefa1468.jpg', 'products/product-218/product-218-image/inventory-218-77/662a2aefa1468.jpg', 0, 77),
(1126, '662a2aefb4595.jpg', 'products/product-218/product-218-image/inventory-218-77/662a2aefb4595.jpg', 0, 77),
(1127, '662a2aefc583e.jpg', 'products/product-218/product-218-image/inventory-218-77/662a2aefc583e.jpg', 0, 77),
(1128, '662a2aefd4910.jpg', 'products/product-218/product-218-image/inventory-218-77/662a2aefd4910.jpg', 0, 77),
(1129, '662a2aefe26e3.jpg', 'products/product-219/product-219-image/inventory-219-78/662a2aefe26e3.jpg', 1, 78),
(1130, '662a2aeff0a6c.jpg', 'products/product-219/product-219-image/inventory-219-78/662a2aeff0a6c.jpg', 0, 78),
(1131, '662a2af00a14e.jpg', 'products/product-219/product-219-image/inventory-219-78/662a2af00a14e.jpg', 0, 78),
(1132, '662a2af018282.jpg', 'products/product-219/product-219-image/inventory-219-78/662a2af018282.jpg', 0, 78),
(1133, '662a2af024f06.jpg', 'products/product-219/product-219-image/inventory-219-78/662a2af024f06.jpg', 0, 78),
(1134, '662a2af033eae.jpg', 'products/product-219/product-219-image/inventory-219-78/662a2af033eae.jpg', 0, 78),
(1135, '662a2af0439f0.jpg', 'products/product-219/product-219-image/inventory-219-78/662a2af0439f0.jpg', 0, 78),
(1136, '662a2af0519bb.jpg', 'products/product-219/product-219-image/inventory-219-78/662a2af0519bb.jpg', 0, 78),
(1137, '662a2af06079d.jpg', 'products/product-219/product-219-image/inventory-219-78/662a2af06079d.jpg', 0, 78),
(1138, '662a2af06f901.jpg', 'products/product-219/product-219-image/inventory-219-78/662a2af06f901.jpg', 0, 78),
(1139, '662a2af07c2c3.jpg', 'products/product-219/product-219-image/inventory-219-78/662a2af07c2c3.jpg', 0, 78),
(1140, '662a2af08a16a.jpg', 'products/product-219/product-219-image/inventory-219-78/662a2af08a16a.jpg', 0, 78),
(1141, '662a2af098428.jpg', 'products/product-219/product-219-image/inventory-219-78/662a2af098428.jpg', 0, 78),
(1142, '662a2af0a7712.jpg', 'products/product-219/product-219-image/inventory-219-78/662a2af0a7712.jpg', 0, 78),
(1143, '662a2af0b607a.jpg', 'products/product-220/product-220-image/inventory-220-79/662a2af0b607a.jpg', 1, 79),
(1144, '662a2af0c3097.jpg', 'products/product-220/product-220-image/inventory-220-79/662a2af0c3097.jpg', 0, 79),
(1145, '662a2af0d0fde.jpg', 'products/product-220/product-220-image/inventory-220-79/662a2af0d0fde.jpg', 0, 79),
(1146, '662a2af0df522.jpg', 'products/product-220/product-220-image/inventory-220-79/662a2af0df522.jpg', 0, 79),
(1147, '662a2af0ed329.jpg', 'products/product-220/product-220-image/inventory-220-79/662a2af0ed329.jpg', 0, 79),
(1148, '662a2af106494.jpg', 'products/product-220/product-220-image/inventory-220-79/662a2af106494.jpg', 0, 79),
(1149, '662a2af11525f.jpg', 'products/product-221/product-221-image/inventory-221-80/662a2af11525f.jpg', 1, 80),
(1150, '662a2af12242b.jpg', 'products/product-221/product-221-image/inventory-221-80/662a2af12242b.jpg', 0, 80),
(1151, '662a2af12e958.jpg', 'products/product-221/product-221-image/inventory-221-80/662a2af12e958.jpg', 0, 80),
(1152, '662a2af13bba2.jpg', 'products/product-221/product-221-image/inventory-221-80/662a2af13bba2.jpg', 0, 80),
(1153, '662a2af1490fb.jpg', 'products/product-221/product-221-image/inventory-221-80/662a2af1490fb.jpg', 0, 80),
(1154, '662a2af156520.jpg', 'products/product-221/product-221-image/inventory-221-80/662a2af156520.jpg', 0, 80),
(1155, '662a2af163714.jpg', 'products/product-221/product-221-image/inventory-221-80/662a2af163714.jpg', 0, 80),
(1156, '662a2af170c58.jpg', 'products/product-221/product-221-image/inventory-221-80/662a2af170c58.jpg', 0, 80),
(1157, '662a2af17e190.jpg', 'products/product-221/product-221-image/inventory-221-80/662a2af17e190.jpg', 0, 80),
(1158, '662a2af18c9df.jpg', 'products/product-221/product-221-image/inventory-221-80/662a2af18c9df.jpg', 0, 80),
(1159, '662a2af19a11e.jpg', 'products/product-221/product-221-image/inventory-221-80/662a2af19a11e.jpg', 0, 80),
(1160, '662a2af1a9685.jpg', 'products/product-221/product-221-image/inventory-221-80/662a2af1a9685.jpg', 0, 80),
(1161, '662a2af1b763d.jpg', 'products/product-222/product-222-image/inventory-222-81/662a2af1b763d.jpg', 1, 81),
(1162, '662a2af1c4c97.jpg', 'products/product-222/product-222-image/inventory-222-81/662a2af1c4c97.jpg', 0, 81),
(1163, '662a2af1d53d8.jpg', 'products/product-222/product-222-image/inventory-222-81/662a2af1d53d8.jpg', 0, 81),
(1164, '662a2af1e430e.jpg', 'products/product-222/product-222-image/inventory-222-81/662a2af1e430e.jpg', 0, 81),
(1165, '662a2af202949.jpg', 'products/product-222/product-222-image/inventory-222-81/662a2af202949.jpg', 0, 81),
(1166, '662a2af212f8d.jpg', 'products/product-222/product-222-image/inventory-222-81/662a2af212f8d.jpg', 0, 81),
(1167, '662a2af220086.jpg', 'products/product-222/product-222-image/inventory-222-81/662a2af220086.jpg', 0, 81),
(1168, '662a2af22eb50.jpg', 'products/product-222/product-222-image/inventory-222-81/662a2af22eb50.jpg', 0, 81),
(1169, '662a2af23ec56.jpg', 'products/product-222/product-222-image/inventory-222-81/662a2af23ec56.jpg', 0, 81),
(1170, '662a2af24c02d.jpg', 'products/product-222/product-222-image/inventory-222-81/662a2af24c02d.jpg', 0, 81),
(1171, '662a2af25ab08.jpg', 'products/product-222/product-222-image/inventory-222-81/662a2af25ab08.jpg', 0, 81),
(1172, '662a2af267d30.jpg', 'products/product-222/product-222-image/inventory-222-81/662a2af267d30.jpg', 0, 81),
(1173, '662a2af275972.jpg', 'products/product-222/product-222-image/inventory-222-81/662a2af275972.jpg', 0, 81),
(1174, '662a2af283842.jpg', 'products/product-222/product-222-image/inventory-222-81/662a2af283842.jpg', 0, 81),
(1175, '662a2af291efc.jpg', 'products/product-223/product-223-image/inventory-223-82/662a2af291efc.jpg', 1, 82),
(1176, '662a2af29eff2.jpg', 'products/product-223/product-223-image/inventory-223-82/662a2af29eff2.jpg', 0, 82),
(1177, '662a2af2acc78.jpg', 'products/product-223/product-223-image/inventory-223-82/662a2af2acc78.jpg', 0, 82),
(1178, '662a2af2bb09a.jpg', 'products/product-223/product-223-image/inventory-223-82/662a2af2bb09a.jpg', 0, 82),
(1179, '662a2af2c7773.jpg', 'products/product-223/product-223-image/inventory-223-82/662a2af2c7773.jpg', 0, 82),
(1180, '662a2af2d5fa5.jpg', 'products/product-223/product-223-image/inventory-223-82/662a2af2d5fa5.jpg', 0, 82),
(1181, '662a2af2e318b.jpg', 'products/product-224/product-224-image/inventory-224-83/662a2af2e318b.jpg', 1, 83),
(1182, '662a2af2ee023.jpg', 'products/product-224/product-224-image/inventory-224-83/662a2af2ee023.jpg', 0, 83),
(1183, '662a2af3099f6.jpg', 'products/product-224/product-224-image/inventory-224-83/662a2af3099f6.jpg', 0, 83),
(1184, '662a2af317fcd.jpg', 'products/product-224/product-224-image/inventory-224-83/662a2af317fcd.jpg', 0, 83),
(1185, '662a2af327537.jpg', 'products/product-224/product-224-image/inventory-224-83/662a2af327537.jpg', 0, 83),
(1186, '662a2af335873.jpg', 'products/product-224/product-224-image/inventory-224-83/662a2af335873.jpg', 0, 83),
(1187, '662a2af347154.jpg', 'products/product-224/product-224-image/inventory-224-83/662a2af347154.jpg', 0, 83),
(1188, '662a2af354733.jpg', 'products/product-224/product-224-image/inventory-224-83/662a2af354733.jpg', 0, 83),
(1189, '662a2af3671d3.jpg', 'products/product-224/product-224-image/inventory-224-83/662a2af3671d3.jpg', 0, 83),
(1190, '662a2af37ad83.jpg', 'products/product-224/product-224-image/inventory-224-83/662a2af37ad83.jpg', 0, 83),
(1191, '662a2af38a107.jpg', 'products/product-224/product-224-image/inventory-224-83/662a2af38a107.jpg', 0, 83),
(1192, '662a2af399528.jpg', 'products/product-224/product-224-image/inventory-224-83/662a2af399528.jpg', 0, 83),
(1193, '662a2af3abebb.jpg', 'products/product-224/product-224-image/inventory-224-83/662a2af3abebb.jpg', 0, 83),
(1194, '662a2af3bb431.jpg', 'products/product-224/product-224-image/inventory-224-83/662a2af3bb431.jpg', 0, 83),
(1195, '662a2af3ca257.jpg', 'products/product-224/product-224-image/inventory-224-83/662a2af3ca257.jpg', 0, 83),
(1196, '662a2af3d927d.jpg', 'products/product-224/product-224-image/inventory-224-83/662a2af3d927d.jpg', 0, 83),
(1197, '662a2af3e813a.jpg', 'products/product-225/product-225-image/inventory-225-84/662a2af3e813a.jpg', 1, 84),
(1198, '662a2af400b91.jpg', 'products/product-225/product-225-image/inventory-225-84/662a2af400b91.jpg', 0, 84),
(1199, '662a2af41000d.jpg', 'products/product-225/product-225-image/inventory-225-84/662a2af41000d.jpg', 0, 84),
(1200, '662a2af41c7de.jpg', 'products/product-225/product-225-image/inventory-225-84/662a2af41c7de.jpg', 0, 84),
(1201, '662a2af42ad35.jpg', 'products/product-225/product-225-image/inventory-225-84/662a2af42ad35.jpg', 0, 84),
(1202, '662a2af4384ce.jpg', 'products/product-225/product-225-image/inventory-225-84/662a2af4384ce.jpg', 0, 84),
(1203, '662a2af446b18.jpg', 'products/product-226/product-226-image/inventory-226-85/662a2af446b18.jpg', 1, 85),
(1204, '662a2af453fb4.jpg', 'products/product-226/product-226-image/inventory-226-85/662a2af453fb4.jpg', 0, 85),
(1205, '662a2af461b92.jpg', 'products/product-226/product-226-image/inventory-226-85/662a2af461b92.jpg', 0, 85),
(1206, '662a2af46ecbc.jpg', 'products/product-226/product-226-image/inventory-226-85/662a2af46ecbc.jpg', 0, 85),
(1207, '662a2af47c5e2.jpg', 'products/product-227/product-227-image/inventory-227-86/662a2af47c5e2.jpg', 1, 86),
(1208, '662a2af48ad44.jpg', 'products/product-227/product-227-image/inventory-227-86/662a2af48ad44.jpg', 0, 86),
(1209, '662a2af49755c.jpg', 'products/product-227/product-227-image/inventory-227-86/662a2af49755c.jpg', 0, 86),
(1210, '662a2af4a5639.jpg', 'products/product-227/product-227-image/inventory-227-86/662a2af4a5639.jpg', 0, 86),
(1211, '662a2af4b20e2.jpg', 'products/product-227/product-227-image/inventory-227-86/662a2af4b20e2.jpg', 0, 86),
(1212, '662a2af4c044b.jpg', 'products/product-227/product-227-image/inventory-227-86/662a2af4c044b.jpg', 0, 86),
(1213, '662a2af4cc28e.jpg', 'products/product-227/product-227-image/inventory-227-86/662a2af4cc28e.jpg', 0, 86),
(1214, '662a2af4db769.jpg', 'products/product-227/product-227-image/inventory-227-86/662a2af4db769.jpg', 0, 86),
(1215, '662a2af4e9382.jpg', 'products/product-227/product-227-image/inventory-227-86/662a2af4e9382.jpg', 0, 86),
(1216, '662a2af503b8a.jpg', 'products/product-227/product-227-image/inventory-227-86/662a2af503b8a.jpg', 0, 86),
(1217, '662a2af511fac.jpg', 'products/product-227/product-227-image/inventory-227-86/662a2af511fac.jpg', 0, 86),
(1218, '662a2af51ef8f.jpg', 'products/product-227/product-227-image/inventory-227-86/662a2af51ef8f.jpg', 0, 86),
(1219, '662a2af52de99.jpg', 'products/product-228/product-228-image/inventory-228-87/662a2af52de99.jpg', 1, 87),
(1220, '662a2af53714b.jpg', 'products/product-228/product-228-image/inventory-228-87/662a2af53714b.jpg', 0, 87),
(1221, '662a2af545106.jpg', 'products/product-228/product-228-image/inventory-228-87/662a2af545106.jpg', 0, 87),
(1222, '662a2af554a48.jpg', 'products/product-228/product-228-image/inventory-228-87/662a2af554a48.jpg', 0, 87),
(1223, '662a2af55f9f3.jpg', 'products/product-228/product-228-image/inventory-228-87/662a2af55f9f3.jpg', 0, 87),
(1224, '662a2af56d2db.jpg', 'products/product-228/product-228-image/inventory-228-87/662a2af56d2db.jpg', 0, 87),
(1225, '662a2af57d1eb.jpg', 'products/product-229/product-229-image/inventory-229-88/662a2af57d1eb.jpg', 1, 88),
(1226, '662a2af58b656.jpg', 'products/product-229/product-229-image/inventory-229-88/662a2af58b656.jpg', 0, 88),
(1227, '662a2af597cb3.jpg', 'products/product-229/product-229-image/inventory-229-88/662a2af597cb3.jpg', 0, 88),
(1228, '662a2af5a653e.jpg', 'products/product-229/product-229-image/inventory-229-88/662a2af5a653e.jpg', 0, 88),
(1229, '662a2af5b3207.jpg', 'products/product-229/product-229-image/inventory-229-88/662a2af5b3207.jpg', 0, 88),
(1230, '662a2af5c2959.jpg', 'products/product-229/product-229-image/inventory-229-88/662a2af5c2959.jpg', 0, 88),
(1231, '662a2af5cf9c5.jpg', 'products/product-229/product-229-image/inventory-229-88/662a2af5cf9c5.jpg', 0, 88),
(1232, '662a2af5dce54.jpg', 'products/product-229/product-229-image/inventory-229-88/662a2af5dce54.jpg', 0, 88),
(1233, '662a2af5eb7bd.jpg', 'products/product-229/product-229-image/inventory-229-88/662a2af5eb7bd.jpg', 0, 88),
(1234, '662a2af60482c.jpg', 'products/product-229/product-229-image/inventory-229-88/662a2af60482c.jpg', 0, 88),
(1235, '662a2af616001.jpg', 'products/product-230/product-230-image/inventory-230-89/662a2af616001.jpg', 1, 89),
(1236, '662a2af622e21.jpg', 'products/product-230/product-230-image/inventory-230-89/662a2af622e21.jpg', 0, 89),
(1237, '662a2af6329c6.jpg', 'products/product-230/product-230-image/inventory-230-89/662a2af6329c6.jpg', 0, 89),
(1238, '662a2af64320d.jpg', 'products/product-230/product-230-image/inventory-230-89/662a2af64320d.jpg', 0, 89),
(1239, '662a2af64f998.jpg', 'products/product-230/product-230-image/inventory-230-89/662a2af64f998.jpg', 0, 89),
(1240, '662a2af65de1b.jpg', 'products/product-230/product-230-image/inventory-230-89/662a2af65de1b.jpg', 0, 89),
(1241, '662a2af66b57e.jpg', 'products/product-230/product-230-image/inventory-230-89/662a2af66b57e.jpg', 0, 89),
(1242, '662a2af678a69.jpg', 'products/product-230/product-230-image/inventory-230-89/662a2af678a69.jpg', 0, 89),
(1243, '662a2af68830c.jpg', 'products/product-230/product-230-image/inventory-230-89/662a2af68830c.jpg', 0, 89),
(1244, '662a2af6978e9.jpg', 'products/product-230/product-230-image/inventory-230-89/662a2af6978e9.jpg', 0, 89),
(1245, '662a2af6a81f5.jpg', 'products/product-230/product-230-image/inventory-230-89/662a2af6a81f5.jpg', 0, 89),
(1246, '662a2af6b8f7d.jpg', 'products/product-230/product-230-image/inventory-230-89/662a2af6b8f7d.jpg', 0, 89),
(1247, '662a2af6c81ec.jpg', 'products/product-230/product-230-image/inventory-230-89/662a2af6c81ec.jpg', 0, 89),
(1248, '662a2af6d8b4c.jpg', 'products/product-230/product-230-image/inventory-230-89/662a2af6d8b4c.jpg', 0, 89),
(1249, '662a2af6e78e5.jpg', 'products/product-231/product-231-image/inventory-231-90/662a2af6e78e5.jpg', 1, 90),
(1250, '662a2af700ace.jpg', 'products/product-231/product-231-image/inventory-231-90/662a2af700ace.jpg', 0, 90),
(1251, '662a2af70efd5.jpg', 'products/product-231/product-231-image/inventory-231-90/662a2af70efd5.jpg', 0, 90),
(1252, '662a2af71c535.jpg', 'products/product-231/product-231-image/inventory-231-90/662a2af71c535.jpg', 0, 90),
(1253, '662a2af729ecf.jpg', 'products/product-231/product-231-image/inventory-231-90/662a2af729ecf.jpg', 0, 90),
(1254, '662a2af7368b7.jpg', 'products/product-231/product-231-image/inventory-231-90/662a2af7368b7.jpg', 0, 90),
(1255, '662a2af744cb0.jpg', 'products/product-231/product-231-image/inventory-231-90/662a2af744cb0.jpg', 0, 90),
(1256, '662a2af7522b2.jpg', 'products/product-231/product-231-image/inventory-231-90/662a2af7522b2.jpg', 0, 90),
(1257, '662a2af75fae4.jpg', 'products/product-232/product-232-image/inventory-232-91/662a2af75fae4.jpg', 1, 91),
(1258, '662a2af76c4c4.jpg', 'products/product-232/product-232-image/inventory-232-91/662a2af76c4c4.jpg', 0, 91),
(1259, '662a2af77a2d9.jpg', 'products/product-234/product-234-image/inventory-234-93/662a2af77a2d9.jpg', 1, 93),
(1260, '662a2af78a4e2.jpg', 'products/product-234/product-234-image/inventory-234-93/662a2af78a4e2.jpg', 0, 93),
(1261, '662a2af796e7f.jpg', 'products/product-235/product-235-image/inventory-235-94/662a2af796e7f.jpg', 1, 94),
(1262, '662a2af7a422a.jpg', 'products/product-235/product-235-image/inventory-235-94/662a2af7a422a.jpg', 0, 94),
(1263, '662a2af7b100e.jpg', 'products/product-235/product-235-image/inventory-235-94/662a2af7b100e.jpg', 0, 94),
(1264, '662a2af7c0476.jpg', 'products/product-235/product-235-image/inventory-235-95/662a2af7c0476.jpg', 1, 95),
(1265, '662a2af7cd6c6.jpg', 'products/product-235/product-235-image/inventory-235-95/662a2af7cd6c6.jpg', 0, 95),
(1266, '662a2af7db5e2.jpg', 'products/product-235/product-235-image/inventory-235-95/662a2af7db5e2.jpg', 0, 95),
(1267, '662a2af7ea088.jpg', 'products/product-235/product-235-image/inventory-235-95/662a2af7ea088.jpg', 0, 95),
(1268, '662a2af806b14.jpg', 'products/product-235/product-235-image/inventory-235-95/662a2af806b14.jpg', 0, 95),
(1269, '662a2af8152f7.jpg', 'products/product-235/product-235-image/inventory-235-95/662a2af8152f7.jpg', 0, 95),
(1270, '662a3290b25f5.jpg', 'products/product-233/product-233-image/inventory-233-92/662a3290b25f5.jpg', 1, 92),
(1271, '662a3290c3c17.jpg', 'products/product-233/product-233-image/inventory-233-92/662a3290c3c17.jpg', 0, 92),
(1272, '662a3290d108c.jpg', 'products/product-233/product-233-image/inventory-233-92/662a3290d108c.jpg', 0, 92),
(1273, '662a3290de595.jpg', 'products/product-233/product-233-image/inventory-233-92/662a3290de595.jpg', 0, 92),
(1276, '1714079616.jpg', 'products/product-238/product-238-image/inventory-238-98/1714079616.jpg', 1, 98);

-- --------------------------------------------------------

--
-- Table structure for table `item_itemdification`
--

CREATE TABLE `item_itemdification` (
  `inventory_item_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `upc_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lm_orders`
--

CREATE TABLE `lm_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_total` float NOT NULL,
  `order_total_items` int(11) NOT NULL,
  `order_status` varchar(200) NOT NULL DEFAULT 'PROCESSING',
  `order_date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_shipping_address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lm_orders`
--

INSERT INTO `lm_orders` (`order_id`, `customer_id`, `order_total`, `order_total_items`, `order_status`, `order_date_created`, `order_shipping_address`) VALUES
(43, 41, 1499, 1, 'NOT COMPLETED', '2024-02-25 20:41:57', 5),
(44, 41, 270072, 2, 'NOT COMPLETED', '2024-03-02 15:32:57', 5),
(45, 41, 55180, 2, 'NOT COMPLETED', '2024-03-07 14:45:59', 5),
(46, 41, 55000, 1, 'NOT COMPLETED', '2024-03-07 19:43:06', 5),
(48, 41, 110000, 1, 'NOT COMPLETED', '2024-03-09 22:35:14', 2),
(49, 41, 55000, 1, 'NOT COMPLETED', '2024-03-09 22:41:12', 3),
(50, 41, 110000, 1, 'NOT COMPLETED', '2024-03-10 19:24:36', 4),
(51, 41, 18000, 1, 'NOT COMPLETED', '2024-03-10 20:32:30', 5),
(54, 82, 11000, 1, 'NOT COMPLETED', '2024-03-17 21:28:03', 8),
(55, 82, 11000, 1, 'NOT COMPLETED', '2024-03-17 21:28:04', 9),
(56, 83, 33000, 1, 'NOT COMPLETED', '2024-03-18 07:45:23', 10),
(57, 83, 1499, 1, 'NOT COMPLETED', '2024-03-18 13:11:18', 11),
(58, 84, 88000, 2, 'NOT COMPLETED', '2024-03-18 14:39:28', 12),
(59, 84, 18000, 1, 'NOT COMPLETED', '2024-03-19 14:31:23', 13),
(60, 84, 70099, 4, 'NOT COMPLETED', '2024-03-19 14:45:36', 14),
(61, 83, 85000, 2, 'NOT COMPLETED', '2024-03-21 11:05:00', 15),
(62, 41, 700000, 1, 'NOT COMPLETED', '2024-03-25 10:22:32', 16),
(63, 41, 700000, 1, 'NOT COMPLETED', '2024-03-25 10:54:18', 17),
(64, 41, 335000, 1, 'NOT COMPLETED', '2024-03-25 14:33:19', 18),
(65, 41, 335000, 1, 'NOT COMPLETED', '2024-03-25 14:44:28', 19),
(66, 41, 335000, 1, 'NOT COMPLETED', '2024-03-25 15:11:33', 20),
(67, 84, 1700000, 1, 'NOT COMPLETED', '2024-04-12 14:42:12', 21),
(68, 41, 304, 1, 'NOT COMPLETED', '2024-04-18 15:15:41', 22),
(69, 85, 152, 1, 'NOT COMPLETED', '2024-04-19 11:53:21', 23);

-- --------------------------------------------------------

--
-- Table structure for table `lm_order_line`
--

CREATE TABLE `lm_order_line` (
  `orderID` int(11) NOT NULL,
  `InventoryItemID` int(11) NOT NULL,
  `delivery_date` date NOT NULL,
  `quwantitiyofitem` int(11) NOT NULL,
  `item_price` float NOT NULL,
  `status` varchar(100) DEFAULT 'NOT DELIVERED'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lm_order_line`
--

INSERT INTO `lm_order_line` (`orderID`, `InventoryItemID`, `delivery_date`, `quwantitiyofitem`, `item_price`, `status`) VALUES
(43, 10, '2024-02-27', 1, 1499, 'NOT DELIVERED'),
(44, 12, '2024-03-04', 9, 30000, 'NOT DELIVERED'),
(44, 13, '2024-03-04', 4, 18, 'NOT DELIVERED'),
(45, 13, '2024-03-09', 10, 18, 'NOT DELIVERED'),
(45, 6, '2024-03-09', 1, 55000, 'NOT DELIVERED'),
(46, 6, '2024-03-09', 1, 55000, 'NOT DELIVERED'),
(48, 6, '2024-03-11', 2, 55000, 'NOT DELIVERED'),
(49, 6, '2024-03-11', 1, 55000, 'NOT DELIVERED'),
(50, 6, '2024-03-12', 2, 55000, 'NOT DELIVERED'),
(51, 11, '2024-03-12', 1, 18000, 'NOT DELIVERED'),
(54, 9, '2024-03-19', 1, 11000, 'NOT DELIVERED'),
(55, 9, '2024-03-19', 1, 11000, 'NOT DELIVERED'),
(56, 9, '2024-03-20', 3, 11000, 'NOT DELIVERED'),
(57, 10, '2024-03-20', 1, 1499, 'NOT DELIVERED'),
(58, 6, '2024-03-20', 1, 55000, 'NOT DELIVERED'),
(58, 9, '2024-03-20', 3, 11000, 'NOT DELIVERED'),
(59, 5, '2024-03-21', 1, 18000, 'NOT DELIVERED'),
(60, 6, '2024-03-21', 1, 55000, 'NOT DELIVERED'),
(60, 7, '2024-03-21', 1, 2600, 'NOT DELIVERED'),
(60, 9, '2024-03-21', 1, 11000, 'NOT DELIVERED'),
(60, 10, '2024-03-21', 1, 1499, 'NOT DELIVERED'),
(61, 6, '2024-03-23', 1, 55000, 'NOT DELIVERED'),
(61, 12, '2024-03-23', 1, 30000, 'NOT DELIVERED'),
(62, 21, '2024-03-27', 1, 700000, 'NOT DELIVERED'),
(63, 21, '2024-03-27', 1, 700000, 'NOT DELIVERED'),
(64, 23, '2024-03-27', 1, 335000, 'NOT DELIVERED'),
(65, 23, '2024-03-27', 1, 335000, 'NOT DELIVERED'),
(66, 23, '2024-03-27', 1, 335000, 'NOT DELIVERED'),
(67, 29, '2024-04-14', 1, 1700000, 'NOT DELIVERED'),
(68, 46, '2024-04-20', 4, 76, 'NOT DELIVERED'),
(69, 45, '2024-04-21', 1, 152, 'NOT DELIVERED');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `newsletter_id` int(11) NOT NULL,
  `newsletter_` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`newsletter_id`, `newsletter_`) VALUES
(12, 'ib@gmail.com'),
(9, 'ibb@gmail.com'),
(1, 'ibrahimcome3@gmail.com'),
(2, 'ibrahimcome3@yahoo.com');

--
-- Triggers `newsletter`
--
DELIMITER $$
CREATE TRIGGER `a` BEFORE INSERT ON `newsletter` FOR EACH ROW BEGIN

 DECLARE c INT;
   SELECT 2 into @c FROM DUAL;

  IF (c = 2) THEN
    INSERT INTO newsletter (newsletter_id, newsletter_) VALUES (NULL, NEW.newsletter_);

  END IF;
  
 
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `phonenumber`
--

CREATE TABLE `phonenumber` (
  `phone_id` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `PhoneNumber` varchar(80) NOT NULL,
  `default_` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `phonenumber`
--

INSERT INTO `phonenumber` (`phone_id`, `CustomerID`, `PhoneNumber`, `default_`) VALUES
(4, 8, '080', 0),
(8, 41, '08051067944', 1);

-- --------------------------------------------------------

--
-- Table structure for table `productitem`
--

CREATE TABLE `productitem` (
  `productID` int(11) NOT NULL,
  `description` text NOT NULL,
  `category` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `vendor` int(11) DEFAULT NULL,
  `brand` int(11) DEFAULT NULL,
  `product_information` text NOT NULL,
  `additional_information` text NOT NULL,
  `shipping_returns` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `productitem`
--

INSERT INTO `productitem` (`productID`, `description`, `category`, `date_added`, `vendor`, `brand`, `product_information`, `additional_information`, `shipping_returns`) VALUES
(142, 'SanDisk Ultra MicroSDXC UHS-I Card', 42, '2024-02-25 10:39:51', 1, 23, 'Memory Card by sandisk', '', 1),
(143, 'Devon Kings \r\nPure Vegetable Oil', 43, '2024-02-25 14:07:43', 1, 23, 'Pure Vegetable Oil', '', 2),
(144, 'chivita Apple juice 1 liter x10', 4, '2024-02-25 19:47:40', 1, 23, 'No sugar Jiuce. A very healthy drink', '', 1),
(145, 'Eva Water', 3, '2024-02-25 20:28:34', 1, 4, 'Good Bottled drinking water', '', 1),
(146, 'Hand Bag 27 Light Brown', 34, '2024-02-25 21:02:52', 1, 4, 'Hand Bag 27 Light Brown imported from india', '', 2),
(147, 'Crocks Shoes', 30, '2024-02-25 21:18:53', 1, 4, 'Hand Bag 27 Light Brown imported from india', 'It is original shoes. you can make a return if the item is in good condition  with in 7 days after delivery', 2),
(149, 'High Quality Banquet Chair ', 37, '2024-02-25 21:36:09', 1, 23, 'High Quality Banquet Chair Arched Back Gold Frame Red Speckle Cloth', '', 2),
(150, 'Bra with lace', 1, '2024-02-26 08:41:26', 1, 23, 'Beauitiful bra with lace', '', 2),
(151, 'Big Bull Rice 25Kg', 46, '2024-03-21 20:24:41', 1, 23, 'Nigerian Farmed Rice big bull rice by Chi house Lagos', '', 1),
(152, 'Big Bull Rice 50Kg', 46, '2024-03-21 20:30:36', 1, 23, 'Nigerian Farmed Rice big bull rice by Chi house Lagos', '', 1),
(153, 'Big Bull Per boiled rice 10kg', 46, '2024-03-21 20:42:06', 1, 20, 'Chi Big Bull Rice 10kg ', '', 1),
(154, 'Hisense TV 50 Inches Smart UHD 4K TV', 47, '2024-03-22 15:38:47', 1, 23, 'Hisense 50\' Inches Smart UHD 4K TV (50A6K) - Black +1 Year Warranty', 'Features\r\n---------------\r\nTrue 4K\r\nBluetooth enabled\r\nNetflix\r\nYouTube\r\nDSTV Now App\r\nHDR 10+ Decoding\r\nVIDAA operating system\r\n4K Upscaling\r\nDTS Studio sound\r\nRemote Now\r\nDisplay Type - UHD\r\nScreen Size (diagonal) - 50 inches\r\nResolution - 3840 x 2160\r\nDimensions (W x H x D)\r\nWith stand: 1116×709×226mm\r\nWithout stand: 1116×648×82mm\r\n2 USB Ports and 3 HDMI Inputs', 2),
(155, 'Hp EliteBook 840 G6 Intel Core I5 Touchscreen 16GB RAM/512GB SSD/Backlit Keyboard/FP Win 11 Pro +BAG', 1, '2024-03-23 21:29:14', 1, 127, 'Hp EliteBook 840 G6 Intel Core I5 Touchscreen 16GB <p>RAM/512GB</p><p> SSD/Backlit</p> <p>Keyboard/FP</p> Win 11 Pro +BAG', '', 1),
(156, 'Furgle Pro Series Gaming Chair With Footrest', 48, '2024-03-23 21:43:00', 1, 128, 'Description:\r\nThis gaming chair is multifunctional, and this is one of the many reasons why it is so great and comfortable. This Gaming Chair extends the full length of the back with support for the shoulders, head, and neck. Our chairs are crafted to perfection and designed to the bodies natural shape, you will find complete comfort with its furniture quality PU leather.\r\n? Swivel Function: Ergonomic Gaming Chair equipped with a 360 degree multi directional casters that can move smoothly and quietly on floor\r\n? Recline Function: High Back Office Gaming Chair is specially designed to be locked at any angle between 90-160 degree in order to provide a comfortable and relaxing experience when working or gaming\r\n?Adjustment Function: Leather gaming chair is along with pneumatic seat height adjustment allow for individualized comfort to easily conform to your desk or workstation\r\n?Ergonomically Design: Gaming Office Chair is made of high durable PU leather with removable headrest and lumbar support. It has a high backrest which ensures proper alignment and support for your back and neck. It will cost you about 10-15mins to assemble the executive swivel chair, which supports up to 300 lbs', 'Description:\r\nThis gaming chair is multifunctional, and this is one of the many reasons why it is so great and comfortable. This Gaming Chair extends the full length of the back with support for the shoulders, head, and neck. Our chairs are crafted to perfection and designed to the bodies natural shape, you will find complete comfort with its furniture quality PU leather.\r\n? Swivel Function: Ergonomic Gaming Chair equipped with a 360 degree multi directional casters that can move smoothly and quietly on floor\r\n? Recline Function: High Back Office Gaming Chair is specially designed to be locked at any angle between 90-160 degree in order to provide a comfortable and relaxing experience when working or gaming\r\n?Adjustment Function: Leather gaming chair is along with pneumatic seat height adjustment allow for individualized comfort to easily conform to your desk or workstation\r\n?Ergonomically Design: Gaming Office Chair is made of high durable PU leather with removable headrest and lumbar support. It has a high backrest which ensures proper alignment and support for your back and neck. It will cost you about 10-15mins to assemble the executive swivel chair, which supports up to 300 lbs', 1),
(157, 'Nothing Phone (2a) 5G (Black, 128 GB)  (8 GB RAM)', 49, '2024-03-23 22:10:09', 1, 129, '8 GB RAM | 128 GB ROM\r\n17.02 cm (6.7 inch) Full HD+ Display\r\n50MP (OIS) + 50MP | 32MP Front Camera\r\n5000 mAh Battery\r\nDimensity 7200 Pro Processo', '', 1),
(158, 'iPhone 14 and iPhone 14 Plus in Starlight', 50, '2024-03-24 16:43:44', 1, 130, '\r\nBrand	Apple\r\nModel Name	iPhone 14\r\nWireless Carrier	Unlocked for All Carriers\r\nOperating System	iOS 16\r\nCellular Technology	5G, 4G LTE\r\nMemory Storage Capacity	128 GB', 'No return once accepted.\r\nInternational warranty included', 1),
(159, 'iPhone 14 and iPhone 14 Plus in Starlight', 50, '2024-03-24 16:43:45', 1, 130, '\r\nBrand	Apple\r\nModel Name	iPhone 14\r\nWireless Carrier	Unlocked for All Carriers\r\nOperating System	iOS 16\r\nCellular Technology	5G, 4G LTE\r\nMemory Storage Capacity	128 GB', 'No return once accepted.\r\nInternational warranty included', 1),
(160, 'Hisense 198 Litres Chest Freezer (FC 260SH) - Silver\r\n', 51, '2024-03-24 17:34:42', 1, 41, 'Hisense Chest Freezer 198 Litres – FC 260SH capacity chest freezer with adjustable temperature. Hisense chest freezers provide reliable frozen storage and feature a convenient center-located lid handle and a quiet motor.\r\n\r\nThe indicator light reassures you that power is supplied to the freezer—and that all your ice cream is safe and sound. Rapidly lowers the temperature in the freezer by activating fast freeze in order to ensure your food is frozen quickly. It is particularly useful when freezing large amounts of food. Dual Functional design enlarges the usable range.\r\n\r\nThe Hisense Chest Freezer is also a very reliable alternative offering you high performance in freezing your food items to keep them fresh, very efficient low energy consumption with an amazing low noise design.\r\n\r\nIt has a mechanical temperature control and an adjustable thermostat for efficient freezing function which gets everything in it so cool very fast, it still stays cool and this way it gets to preserve your perishable food items for a very long time. The freezer provides adequate storage space for lots of items to be stored as it is built to enable you store large quantities of perishable and non-perishable items.', '', 3),
(161, 'Haier Thermocool 200 Litres Chest Freezer (HTF-200) - Silver + 3 Years Warranty', 53, '2024-03-24 21:37:38', 3, 131, 'Haier Thermocool Small Chest Freezer -HTF 200HAS Silver\r\n\r\nIdeal for the smaller home, the Haier Thermocool HTF 200HAS Chest Freezer uses 75mm insulation and low noise operation to slot into a home almost unnoticed.\r\n\r\nDespite its size the product is powerful, with a strong Freezing capacity of up to 100 hours after a power interruption. Anti-Rust protection also ensures that your Freezer is durable to any conditions, and therefore your money is well spent.\r\n\r\n<p>\r\n\r\n</p>', '<article class=\"col8 -pvs\"><div class=\"card-b -fh\"><h2 class=\"hdr -upp -fs14 -m -pam\">Key Features</h2><div class=\"markup -pam\"><ul><li>Dimension (W*D*H) 940*520*845</li>\r\n<li>Freezing Capacity (Kg/24h) 15</li>\r\n<li>Energy Consumption (KW*H/24h) 0.7</li>\r\n<li>Frozen Retention - 100 Hrs (43?)</li>\r\n<li>Freezer-Refrigerator Switchable - Yes</li>\r\n<li>Liner - Textured Aluminum</li>\r\n<li>Noise - No</li>\r\n<li>Power Indication - Green</li>\r\n<li>Super Frozen Button - No</li><li>Up To 50% Energy Saving</li><li>Fast Freeze Function</li><li>100 Hours Frost Retention</li><li>High-Efficiency Compressor</li>Anti rust protected<li>Low noise operation 75mm</li><li>Insulation thickness 100-hours (4 days)&nbsp;</li><li>Wide voltage compressor</li><li>Extra-density insulation</li></ul></div></div></article>', 1),
(162, 'Skyrun 200 Litres Chest Freezer (BD-200A) - Grey\r\n', 54, '2024-03-25 20:30:43', 3, 132, '<ul><li>Total Net Capacity(Liter)?200</li><li>Temperature Control?Yes</li><li>LED Light/Lock&amp;Key?Yes</li><li>Rated Voltage?220-240V</li><li>Power Input?125W</li><li>Net Weight(KG)?33</li><li>Gross Weight(KG)?37</li></ul>', '', 1),
(163, 'Skyrun 180 Litres Upright Freezer (BDL-180HC) - Silver\r\n', 54, '2024-03-25 21:07:36', 3, 132, 'Skyrun 180 Litres Upright Freezer (BDL-180HC) - Silver\r\n', '', 1),
(164, 'Hisense 95 Litres Chest Freezer (FRZ FC 120SH) - Silver\r\n', 51, '2024-03-25 21:20:23', 3, 41, '<ul><li>Capacity: 95 Litres</li><li>Single Door</li><li>Colour: Silver</li><li>Power Indicator Function</li><li>Fast Freeze</li><li>Great Value For Money</li><li>Superior Quality</li></ul>', '', 2),
(165, 'Skyrun 200 Litres Chest Freezer (BD-200HNW) - Grey', 54, '2024-03-26 21:41:42', 2, 0, '<article class=\"col8 -pvs\"><div class=\"card-b -fh\"><h2 class=\"hdr -upp -fs14 -m -pam\">Key Features</h2><div class=\"markup -pam\"><ul><li>Total Net Capacity(Liter)?200</li><li>Temperature Control?Yes</li><li>LED Light/Lock&amp;Key?Yes</li><li>Rated Voltage?220-240V</li><li>Power Input?140W</li><li>Net Weight(KG)?39</li><li>Gross Weight(KG)?42</li></ul></div></div></article>', '', 0),
(166, 'Apple iPad Pro 12.9-inch (6th Generation)', 56, '2024-03-27 21:10:18', 3, 133, '<ul class=\"a-unordered-list a-vertical a-spacing-mini\">  <li class=\"a-spacing-mini\"><span class=\"a-list-item\"> WHY IPAD PRO — iPad Pro is the ultimate iPad experience, with the astonishing performance of the M2 chip, superfast Wi-Fi and 5G, and next-generation Apple Pencil experience. Plus powerful productivity features in iPadOS.  </span></li>  <li class=\"a-spacing-mini\"><span class=\"a-list-item\"> IPADOS + APPS — iPadOS makes iPad more productive, intuitive, and versatile. With iPadOS, run multiple apps at once, use Apple Pencil to write in any text field with Scribble, and edit and share photos. Stage Manager makes multitasking easy with resizable, overlapping apps and external display support. iPad Pro comes with essential apps like Safari, Messages, and Keynote, with over a million more apps available on the App Store.  </span></li>  <li class=\"a-spacing-mini\"><span class=\"a-list-item\"> FAST WI-FI AND 5G CELLULAR CONNECTIVITY — Wi-Fi 6E gives you fast wireless connections for quick transfers of photos, documents, and large video files. And when you’re away from Wi-Fi, superfast 5G gives you the flexibility to stay connected in more places.  </span></li>  <li class=\"a-spacing-mini\"><span class=\"a-list-item\"> PERFORMANCE AND STORAGE — The 8-core CPU in the M2 chip delivers powerful performance, while the 10?core GPU provides blazing-fast graphics. Add all-day battery life, and you can do everything you can imagine on iPad Pro. Up to 2 terabytes of storage means you can store everything from apps to large files like 4K video.  </span></li>  <li class=\"a-spacing-mini\"><span class=\"a-list-item\"> APPLE PENCIL AND MAGIC KEYBOARD — Apple Pencil (2nd generation) transforms iPad Pro into an immersive drawing canvas and the world’s best note?taking device. Magic Keyboard features a great typing experience and a built?in trackpad, while doubling as a protective cover for iPad. Accessories sold separately.  </span></li>  <li class=\"a-spacing-mini\"><span class=\"a-list-item\"> 12.9-INCH LIQUID RETINA XDR DISPLAY — Get 1000 nits of full?screen brightness and 1600 nits of peak brightness, a 1,000,000:1 contrast ratio, Reference Mode for a more color-accurate workflow, and advanced display technologies like ProMotion, True Tone, and P3 wide color. The Liquid Retina XDR display is perfect for viewing and editing HDR photos and video, enjoying your favorite shows, or even playing games.  </span></li>  <li class=\"a-spacing-mini\"><span class=\"a-list-item\"> UNLOCK AND PAY WITH FACE ID — Unlock your iPad Pro, securely authenticate purchases, sign in to apps, and more — all with just a glance.  </span></li>  </ul>', '', 0),
(167, 'Apple iPhone 15 Plus (128 GB) - Pink', 50, '2024-03-27 21:41:39', 3, 133, '<ul class=\"a-unordered-list a-vertical a-spacing-mini\">  <li class=\"a-spacing-mini\"><span class=\"a-list-item\"> WHAT\'S INCLUDED? You get the new iPhone 15 Plus, complete with unlimited talk, text, and data on America\'s Smart Network. We make it easy to keep your existing number or get a new one if you prefer. Best of all? You can upgrade to the latest iPhone every year—no trade-in required to get started. Yes, seriously.  </span></li>  <li class=\"a-spacing-mini\"><span class=\"a-list-item\"> DYNAMIC ISLAND COMES TO IPHONE 15 — Dynamic Island bubbles up alerts and Live Activities — so you don’t miss them while you’re doing something else. You can see who’s calling, track your next ride, check your flight status, and so much more.  </span></li>  <li class=\"a-spacing-mini\"><span class=\"a-list-item\"> INNOVATIVE DESIGN — iPhone 15 Plus features a durable color-infused glass and aluminum design. It’s splash, water, and dust resistant. The Ceramic Shield front is tougher than any smartphone glass. And the 6.7\" Super Retina XDR display is up to 2x brighter in the sun compared to iPhone 14.  </span></li>  <li class=\"a-spacing-mini\"><span class=\"a-list-item\"> 48MP MAIN CAMERA WITH 2X TELEPHOTO — The 48MP Main camera shoots in super high-resolution. So it’s easier than ever to take standout photos with amazing detail. The 2x optical-quality Telephoto lets you frame the perfect close-up.  </span></li>  <li class=\"a-spacing-mini\"><span class=\"a-list-item\"> NEXT-GENERATION PORTRAITS — Capture portraits with dramatically more detail and color. Just tap to shift the focus between subjects — even after you take the shot.  </span></li>  <li class=\"a-spacing-mini\"><span class=\"a-list-item\"> POWERHOUSE A16 BIONIC CHIP — The superfast chip powers advanced features like computational photography, fluid Dynamic Island transitions, and Voice Isolation for phone calls. And A16 Bionic is incredibly efficient to help deliver great all-day battery life.  </span></li>  <li class=\"a-spacing-mini\"><span class=\"a-list-item\"> UNLIMITED WIRELESS? Absolutely, all powered by America\'a Smart Network. We brought together three of America\'s 5G networks to give you unparalleled nationwide coverage. Now, you benefit from the combined strength of not just one, but three networks, ensuring seamless connectivity wherever you are.  </span></li>  </ul>', 'Apple iPhone 15 Plus (128 GB) - Pink', 0),
(168, 'Apple iPhone 15 Plus (128 GB) - Black', 50, '2024-03-27 22:03:52', 3, 0, 'l', 'l', 0),
(179, 'Jameson Black Barrel 70cl\r\n', 2, '2024-04-04 21:42:56', 3, 0, 'Jameson Black Barrel is a triple-distilled, twice charred, Irish Whiskey. Charring is an age-old method for invigorating barrels to intensify the taste. Jameson Black Barrel is a tribute to the coopers, who painstakingly give the bourbon barrels an additional charring to reveal its untold richness and complexity. Because every barrel contains secrets; the trick is coaxing them out.', '', 2),
(180, 'Hisense FRZ FC 340FC 250 LITRES CHEST FREEZER', 51, '2024-04-10 17:50:53', 2, 41, '<div class=\"markup -pam\"><ul>\r\n	<li><strong>Size:</strong> 250 L</li>\r\n	<li><strong>Fast Freezer: </strong>Yes</li>\r\n	<li><strong>Power Indicator Function: </strong>Yes</li>\r\n	<li><strong>Color: </strong>Silver</li>\r\n	<li><strong>Cooling Technology:</strong> Defrost</li>\r\n	<li><strong>Energy Rating:</strong> A</li>\r\n	<li><strong>Temperature Control:</strong> Mechanical</li>\r\n	<li><strong>Refrigerant Gas: </strong>R600A</li>\r\n	<li><strong>Refrigerator Section:</strong> Yes</li>\r\n	<li><strong>Freezer Section:</strong> Yes</li>\r\n	<li><strong>Fast Freezer Function: </strong>Yes</li>\r\n	<li><strong>Handle: </strong>External</li>\r\n	<li><strong>Lockable:&nbsp;</strong> Yes</li>\r\n	<li><strong>Power Indicator Light: </strong>Yes</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p></div>', '', 2),
(181, 'Hennessy XO Extra Old Cognac X2\r\n', 57, '2024-04-10 21:05:20', 3, 0, '\r\n', '', 2),
(182, 'Jameson Irish Whiskey - 70cl - 40% acl. - Single Bottle', 2, '2024-04-11 17:36:57', 3, 0, '40% acl. - Single Bottle', '', 2),
(183, 'Jack Daniels Gentleman Jack Whiskey 75cl', 7, '2024-04-11 18:21:03', 3, 0, 'DOUBLE MELLOWED FOR EXCEPTIONAL SMOOTHNESS - Inspired by the original gentleman distiller and our founder.', '', 2),
(184, 'Remy Martin 70cl VSOP', 7, '2024-04-12 15:50:40', 3, 0, 'Remy Martin 70cl VSOP - Single Bottle', '', 2),
(185, 'XIAOMI Redmi 13C 6.74\' 6GB RAM/128GB ROM Android 12 - Green', 61, '2024-04-15 20:36:38', 2, 137, 'Long-Lasting Battery for Uninterrupted Usage: <br/>\r\n\r\nEmpowering your daily adventures is a non-removable Li-Po 5000 mAh battery, ensuring that you stay connected and productive throughout the day. The Xiaomi Redmi 13c is optimized to provide efficient power management, allowing you to make the most out of your device without constantly worrying about running out of battery. <br/>\r\n\r\nSeamless Integration of Android 13 and MIUI 14: <br/>\r\n\r\nExperience the best of both worlds with the Xiaomi Redmi 13c, where the advanced features of Android 13 seamlessly integrate with the user-friendly MIUI 14 interface. Enjoy the latest Android innovations, enhanced security features, and a smooth, customizable interface that caters to your unique preferences. <br/>\r\n\r\nThe Xiaomi Redmi 13c is a powerhouse of technology, combining a high-performance camera system, immersive display, long-lasting battery, and the seamless integration of Android 13 with MIUI 14. Elevate your smartphone experience with the Redmi 13c, where innovation meets style. <br/>', '<table class=\"aps-specs-table\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"aps-attr-title\">Display Type</td>\r\n<td class=\"aps-attr-value\">IPS LCD</td>\r\n</tr>\r\n<tr>\r\n<td class=\"aps-attr-title\">Size</td>\r\n<td class=\"aps-attr-value\">6.74 inches</td>\r\n</tr>\r\n<tr>\r\n<td class=\"aps-attr-title\">Ratio</td>\r\n<td class=\"aps-attr-value\">20:9 ratio</td>\r\n</tr>\r\n<tr>\r\n<td class=\"aps-attr-title\">Resolution</td>\r\n<td class=\"aps-attr-value\">720 x 1600 pixels</td>\r\n</tr>\r\n<tr>\r\n<td class=\"aps-attr-title\">Pixel Density</td>\r\n<td class=\"aps-attr-value\">260 ppi</td>\r\n</tr>\r\n<tr>\r\n<td class=\"aps-attr-title\">Multitouch</td>\r\n<td class=\"aps-attr-value\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td class=\"aps-attr-title\">Display Protection</td>\r\n<td class=\"aps-attr-value\">Corning Gorilla Glass</td>\r\n</tr>\r\n<tr>\r\n<td class=\"aps-attr-title\">Refresh Rate</td>\r\n<td class=\"aps-attr-value\">90Hz</td>\r\n</tr>\r\n<tr>\r\n<td class=\"aps-attr-title\">Features</td>\r\n<td class=\"aps-attr-value\">450 nits (typ)<br>600 nits (HBM)</td>\r\n</tr>\r\n</tbody>\r\n</table>', 0),
(186, 'Martell Cognac Blue Swift 75cl (VSOP)', 57, '2024-04-17 21:00:30', 3, 138, '<ul><li><font face=\"helvetica, arial, sans-serif\">A sensation of fullness and generosity with notes of ginger and candied fruit, followed by distinctive hints of toasted oak from the Kentucky bourbon casks.</font></li><li><font face=\"helvetica, arial, sans-serif\">75cl</font></li><li><font face=\"helvetica, arial, sans-serif\">Martell Blue Swift is a spirit drink made of cognac VSOP then finished in Kentucky Bourbon casks</font></li><li><font face=\"helvetica, arial, sans-serif\">40% alcohol volume</font></li></ul>', '', 0),
(187, 'Absolut Vodka Original 1L', 62, '2024-04-17 21:00:30', 3, 139, 'Made from all-natural ingredients with no added sugar, Absolut Vodka boasts a rich.', '', 0),
(188, 'Absolut Mandrin 1L', 62, '2024-04-22 10:56:45', 3, 139, 'Mandarins. Sweet, easy-to-peel little things. And less of a hassle than oranges. No need to cut them in slices. Or peel them for ages. Or eat them with a napkin and then never get rid of the stickiness, no matter how many times you wash your hands.Yes, we have a thing for mandarins and while everyone was making orange flavored vodka, we did what we usually do; something different. Absolut Mandrin was a hard one to make, but is ridiculously simple to mix. Just add Ginger Ale or Ginger Beer for a perfect weekend drink.', '', 0),
(189, 'Absolut Wild Berri 1L', 62, '2024-04-22 10:56:45', 3, 139, 'Absolut Wild Berri is the perfect kick starter for a full-on house warming party, an ideal ice-breaker for that spontaneous after work get-together, and everything but a wild card when it comes to mixing with others.', 'With a taste of freshly picked blueberries, blackberries and wild strawberries, Absolut Wild Berri provides a complex berry flavor so you can easily perfect your drink.', 0),
(190, 'Absolut Citron', 62, '2024-04-22 10:56:45', 3, 139, 'Following the launch of Absolut Peppar in 1986, this smooth lemon-flavored vodka hit the market two years later and quickly became the best-selling flavored from Absolute vodka. Actually.', '', 0),
(191, 'Absolut Lime', 62, '2024-04-22 10:56:45', 3, 139, 'Absolut Citron not only stirred but shook the world of mixology, its apprentice was brought to life to the satisfaction of bartenders and drink lovers. Since the launch of Absolut Lime with its natural and not overly-sweet flavor, bartenders and trytobees at home have one less thing to think about when trying to impress their guests with that perfectly balanced drink. ', '', 0),
(192, 'Absolut Vanilia Vodka', 62, '2024-04-22 10:56:45', 3, 139, 'Vanilla. This magnificent flavor that can enhance pretty much everything from cookies to? well you name it. Perfect for those with a sweet tooth or the ones that are into experimenting with contrasting flavors, vanilla?s versatility holds true when making drinks ? regardless if you?re going for something simple like a Vanilia Espresso Martini, or something as provocative as a Pornstar Martini.\n\n', '', 0),
(193, 'Martell Cognac VS Single Distillery 70cl', 57, '2024-04-22 10:56:45', 3, 138, 'It is the youngest Cognac to be launched by the house, aged for only two years. It has fruity notes of plum, abricot, and lemon confit. The eaux-de-vie stem from both the Petite and Grande Champagne and are distilled, aged, and blended by a single distillery. The Martell cognac house is one of the oldest of the big cognac houses, founded in 1715, they have maintained the quality of their cognacs; the Martell style is known for its elegance, complexity and balance which is a result of a unique savoir-faire: distillation of clear wines only and ageing of eaux-de-vie in fine grain oak barrel', '', 0),
(195, 'Oraimo 20000mAh Power Charging Bank Fast Charging OPB-P208DN', 65, '2024-04-22 20:54:36', 3, 144, 'Oraimo Power bank', '', 1),
(196, 'Oraimo 10000mAh Power-Bank 2.1A For 2 Device Same Time OPB-P110DN', 65, '2024-04-22 20:54:36', 3, 144, 'Oraimo Power bank', '', 1),
(197, 'Oraimo 20,000MAH Type C & USB Port Powerbank\r\n', 65, '2024-04-22 20:54:36', 3, 144, 'Oraimo Power bank', '', 1),
(198, 'Oraimo 10000mah Power-Bank 2.4A Fast Charging OPB-P118D', 65, '2024-04-22 20:54:36', 3, 144, 'Oraimo Power bank', '', 1),
(199, 'Oraimo Dual USB Output 204D Power-Bank 20000mAh Fast Charging', 65, '2024-04-22 20:54:36', 3, 144, 'Oraimo Power bank', '', 1),
(200, 'Oraimo 30000mah Massive Ultra Two-way Fast Powerbank', 65, '2024-04-22 20:54:36', 3, 144, 'Oraimo Power bank', '', 1),
(201, 'Oraimo 40000mah Laptop Power Bank 22.5W Digital Display', 65, '2024-04-22 20:54:36', 3, 144, 'Oraimo Power bank', '', 1),
(202, 'Oraimo 10000mAh 12W Fast Charge Power-Bank\r\n', 65, '2024-04-22 20:54:36', 3, 144, 'Oraimo Power bank', '', 1),
(203, 'Oraimo 30000Mah High Speed Fast Charging Power Bank', 65, '2024-04-22 20:54:36', 3, 144, 'Oraimo Power bank', '', 1),
(204, 'Oraimo Traveler Link 27 27000mAh 3 Built-in Charging Cables AniFast 12W Fast Charge', 65, '2024-04-22 20:54:36', 3, 144, 'Oraimo Power bank', '', 1),
(205, 'Oraimo 22.5W LED Light Super Fast 50000mA Power Bank + Free Charger', 65, '2024-04-22 20:54:36', 3, 144, 'Oraimo Power bank', '', 1),
(206, 'Oraimo 40000mAh Strong Massive Power Bank With LED Light', 65, '2024-04-22 20:54:36', 3, 144, 'Oraimo Power bank', '', 1),
(207, 'Oraimo PowerBox-600 60000m-A-h 22.5W Super Power Bank', 65, '2024-04-22 20:54:36', 3, 144, 'Oraimo Power bank', '', 1),
(208, 'Oraimo MagPower 5000mAh Magnetic Wireless Power Bank\r\n', 65, '2024-04-22 20:54:36', 3, 144, 'Oraimo Power bank', '', 1),
(209, 'Oraimo 22.5W Super Fast 5 Output Port LED Light 60000mA Power Bank + Free Charger', 65, '2024-04-22 20:54:36', 3, 144, 'Oraimo Power bank', '', 1),
(210, 'Realme earbuds ORAIMO FREEPODS Bluetooth Earbuds Wireless Stereo Earphones Earp?ds', 67, '2024-04-25 08:05:10', 3, 144, 'Mini Invisible wireless earphone design;\n\nSuper Mini size and hidden in the ear, do not wear the bale;\n\nUnique headset design, stable in the ear, good for driving, sports, business, or leisure;\n\nSignal with  Wireless range (no obstacles);\n\nDeep DPS-noise reduction microphone ensures clear call quality;\n\nVoice prompt for pairing, calling, turn on/off;\n\nOne button function for on/off, song switch, language change, receive calls;\n\nSpecification:\n\nMaterial: ABS Plastic\n\nPackage Includes:\n\n1 Set Earphone\n\nNote:\n\nPlease visit our Instagram page @quickstore.ng for more information on our products\n\nYour satisfaction is our utmost concern.\n\nThank you', '', 1),
(211, 'Oraimo Rock Long Playtime 2-mic ENC TWS True Wireless Earbuds', 67, '2024-04-25 08:05:10', 3, 144, 'Long Lasting 24H Playtime-Charge on the Go\n\nPlaytime lasts for over 8 hours from single charge and total 24 hours with charging case. If you are low on power, 10 minutes of charge time gives you up to 60 minutes of playback.\n\n*Results are based on 50% volume. Battery life may vary depending on the volume, the source of playback, the temperature, environmental interference, and the users habits.\n\n\n\nAmazing Bass Quality-Bass that Touches You\n\nProvides seriously powerful and punchy bass. Efficiently restores the authentic sound quality.\n\n\n\nIPX5 Waterproof-Water Resistant for Daily Use\n\nIPX5 protects your earbuds from sweat, water, rain, etc. A perfect choice for running, jogging, cycling, working out in the gym.\n\n\n\n2-mic ENC Technology-Environmental Noise Canceling for Clear Call\n\nENC technology effectively suppresses environmental noise, making the person you are calling hear your voice more clearly.\n\n\n\nTiny Size and Fit Design-Comfortable and Secure\n\nPerfectly fits the curve of inner contour of ear. Whether you re running or jumping, the earbuds will stay in ear securely.', '', 1),
(212, 'Oraimo Rhyme ANC Active Noise Cancellation ENC Noise Cancellation True Wireless Earbuds', 67, '2024-04-25 08:05:10', 3, 144, 'Oriamo Wireless Airbuds', '', 1),
(213, 'Oraimo BURNA BOY Space Pod Noise Cancellation Earbud', 67, '2024-04-25 08:05:10', 3, 144, 'Oriamo Wireless Airbuds', '', 1),
(214, 'Oraimo FreePods Pro ANC Active Noise Cancellation Wireless Earbuds', 67, '2024-04-25 08:05:10', 3, 144, 'Oriamo Wireless Airbuds', '', 1),
(215, 'Oraimo FreePods 4 Active Noise Cancellation Earbuds', 67, '2024-04-25 08:05:10', 3, 144, 'Oriamo Wireless Airbuds', '', 1),
(216, 'Oraimo FreePods Lite 40-hour Playtime ENC True Wireless Earbuds', 67, '2024-04-25 08:05:10', 3, 144, 'Oriamo Wireless Airbuds', '', 1),
(217, 'Oraimo FreePods 3C ENC Calling Noise Cancellation True Wireless Earbuds', 67, '2024-04-25 08:05:10', 3, 144, 'Oriamo Wireless Airbuds', '', 1),
(218, 'Oraimo Riff 2 ENC True Wireless Earbuds With APP Control', 67, '2024-04-25 08:05:10', 3, 144, 'Oriamo Wireless Airbuds', '', 1),
(219, 'Oraimo Riff True Wireless Earbuds - Red', 67, '2024-04-25 08:05:10', 3, 144, 'Oriamo Wireless Airbuds', '', 1),
(220, 'Oraimo Havy Base with long lasting battery SHARK 4 NECKLACE EARBUD', 67, '2024-04-25 08:05:11', 3, 144, 'Oriamo Wireless Airbuds', '', 1),
(221, 'Oraimo Air Buds-3S Super Bass True Wireless Stereo Smart Earbuds', 67, '2024-04-25 08:05:11', 3, 144, 'Oriamo Wireless Airbuds', '', 1),
(222, 'Oraimo Air 12 Pro Fingerprint Earbuds + Inbuilt Power Bank', 67, '2024-04-25 08:05:11', 3, 144, '<ul class=\"highlights text-left\" style=\"box-sizing: border-box; padding: 0px 0px 0px 15px; margin: 0px 0px 15px;\"><li style=\"box-sizing: border-box; padding: 0px; margin: 0px; line-height: 18px;\">Stereo Best Quality</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px; line-height: 18px;\">LED Power Display</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px; line-height: 18px;\">Noise Reduction</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px; line-height: 18px;\">Low Power Consumption</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><p style=\"box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(49, 49, 51); font-family: -apple-system, BlinkMacSystemFont, Roboto, \" helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 12px;\"=\"\">High Defination Sound Active Noise Cancellation Technology Delicate &amp; Stylish Design Light Weight &amp; Extremely Convenient to use<br style=\"box-sizing: inherit;\">Soft head beam lining &amp; ear cushions<br style=\"box-sizing: inherit;\">More comfortable to wear<br style=\"box-sizing: inherit;\">Ergonomic Design<br style=\"box-sizing: inherit;\">Suitable for different head types and sizes<br style=\"box-sizing: inherit;\">Play Various Games Immersively</p><p style=\"box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(49, 49, 51); font-family: -apple-system, BlinkMacSystemFont, Roboto, \" helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 12px;\"=\"\">Using the brand new Bluetooth 5.1 technology<br style=\"box-sizing: inherit;\">More Powerful high-speed transmission efficiency</p></li></ul>', '', 1),
(223, 'Oraimo Wireless FreePods Lite 40-hour Playtime ENC True Wireless Earbuds - sky blue', 67, '2024-04-25 08:05:11', 3, 144, 'Air buds', '', 1),
(224, 'Oraimo Air-Buds 4 ENC True Wireless Earbuds', 67, '2024-04-25 08:05:11', 3, 144, 'Smart LED Power Display\nSee Remaining Power at a Glance\n\nYou can effortlessly monitor the remaining power of each earbud and the charging case through the convenient power LED display.\n\n*The LED display shows charging case and earbud battery levels, adjusting by 1% and 10% respectively.', '', 1),
(225, 'Jbl Premium Quality- Jbl MG-S22 Wireless Bluetooth Earbud', 68, '2024-04-25 08:05:11', 3, 145, '<ul style=\"box-sizing: border-box; padding: 0px 0px 0px 16px; margin: 0px; font-family: Roboto, -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" color:=\"\" rgb(40,=\"\" 40,=\"\" 40);\"=\"\"><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">-IOS: Popup window prompts that the headset is ready to connect, just click \"Connect\"</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">- For Android OS: Enable Bluetooth pairing mode on your mobile device.</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">- touch sensor</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">- Bluetooth 5.0</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">- long battery life</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">- Wear without feeling</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">- Dual noise reduction</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">- 13mm unit (titanium-plated diaphragm for shocking sound quality)</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">- IPX5 dust and waterproof</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">- Smart Touch</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">- Voice assistant support Hey Siri</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">- Battery level indicator</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">- Sound quality (for music and video)</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">- change name</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">- Track and find my Phone</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">- Active Noise Cancellation and Transparency Mode page (for settings page only - no actual effect)</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><br style=\"box-sizing: border-box;\"></li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Dual beamforming microphones</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Built-in microphone</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><br style=\"box-sizing: border-box;\"></li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Play, pause or answer calls with just one click</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Double click to fast forward</li><li style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Triple tap to jump back</li></ul>', '', 1),
(226, 'Realme earbuds Wireless Earbuds Bluetooth 5.0 Earphones 6D Bass Earphones', 69, '2024-04-25 08:05:11', 0, 146, '<ul><li>As the noise pollution in the city becomes more and more serious, using ordinary earphone earplugs outdoors can only increase the volume to drown out the noise, thus not only can t enjoy the beautiful music, but also has a great impact on their hearing.The emergence of noise-cancelling earphones has solved this problem well.</li><li>The development of headphone display is moving towards wireless and noise reduction.Wireless headphones are more free to use. With the development of science and technology, wireless transmission technology is gradually mature, ensuring the sound quality of wireless headphones.Another reason is the popularity of music on mobile phones and the birth of bluetooth wireless transmission technology.</li><li>The active noise cancelling headset has a noise cancelling device. The noise cancelling device USES the microphone to collect the sound from the outside world and emit the opposite sound wave to cancel the noise.Today, people are more and more concerned about their health. Noise-canceling earphones can better enjoy music outdoors and ensure the health of ears, which is the development direction of earphones in the future.</li><li>With the development of earphones, the most important sound unit is the moving coil sound unit.After so many years of development, the moving-coil headphone technology has been very mature, but also encountered a bottleneck in the improvement of sound.In addition to static headphones, there are many derivative technologies for moving coil articulation units, among which the most widely used is the moving iron articulation unit.</li><li>The ear muffs of the closed earphones adopt a completely closed structure, which can prevent the external sound from entering, so the pressure on the ears is greater, and the sound positioning is accurate and clear. This structure is often used in the field of professional monitoring.There are also some closed earphones with the sound field of open earphones, which can insulate the noise while still maintaining high quality sound.</li><li>There is no strict regulation on the semi-open earphone, the sound can only go in or out, according to the use of the need to make design adjustments.</li><li><br></li><li>Style:In-Ear</li><li>Wireless Type:bluetooth</li><li>Connectors:USB</li><li>Communication:Wireless</li><li>Is wireless:Yes</li><li>Line Length:None</li><li>Support APP</li><li>Function:for Video Game</li><li>Function:For Mobile Phone</li><li>Function:For iPod</li><li>Function:HiFi Headphone</li><li>Function:Sport</li><li>Plug Type:Wireless</li><li>With Microphone:Yes</li><li>Compatibility:For IOS,For Android,windows</li><li>Function 1:summon Siri</li><li>Function 2:volume decrease</li><li>Function 3:switch previous song</li><li>Function 4:touch operation</li><li>Function 5:intelligent noise reduction</li><li>Function 6:binaural HD call</li></ul>', '', 1),
(227, 'Realme earbuds NEWAGE EarPhones Bluetooth For Android And Apple Earbuds Phone Earpiece Hear 5.0 Wireless Earp?ds Headphones A?rpods', 69, '2024-04-25 08:05:11', 0, 146, 'Air buds', '', 1),
(228, 'Realme earbuds Bluetooth Earbuds With Powerbank Wireless Earbud Bluetooth 5 0 Earphone Microphone', 69, '2024-04-25 08:05:11', 0, 0, 'Air buds', '', 1),
(229, 'Realme earbuds Bluetooth Earpiece Wireless Earbuds 8D Earp?ds Stereo Bass Earphones Earpiece', 69, '2024-04-25 08:05:11', 0, 0, 'Mini in-ear wireless invisible design;\n\nSuper Mini Size and hidden in the ear, no wearing burden;\n\nErgonomic earphone design, stable in the ear, good for driving, sports, business, or leisure;\n\nBluetooth Connection\n\nDeep DPS noise-reduction microphone ensures clear call quality;\n\nVoice prompt for pairing, calling, turn on/off;\n\nOne function button for on/off, song switch, language change, receive call.', '', 1),
(230, 'Realme earbuds Blu?tooth W?reless Earphones Headphones Earpiece Noise Cancellation Stereo Earp?ds Bass Earpiece Wireless Earbuds Headset', 69, '2024-04-25 08:05:11', 0, 0, 'Air buds', '', 1),
(231, 'Realme earbuds Wireless One Ear Earbuds Bluetooth Earpiece Single Earp?ds Headphones Earphones', 69, '2024-04-25 08:05:11', 0, 0, 'Air buds', '', 1),
(232, 'Realme earbuds Itel Wireless Earbuds Bluetooth Earpiece', 69, '2024-04-25 08:05:11', 0, 0, 'Air buds', '', 1),
(233, 'Realme earbuds Sleek Wireless Earbuds Bluetooth Headphones Earpod Earpiece Fingerprint Touch Control Bass Iphone Headset', 69, '2024-04-25 08:05:11', 0, 0, '<ul><li>Built in controls for play/pause/next/prev and answering calls</li>\n<li>Built in microphone for hand free calls</li>\n<li>Touch control key function- previous track / next track- accept / reject calls</li> </ul>\nSiri function for iPhone, \nvoice assistant for Android phone', '', 1),
(234, 'Realme earbuds NEWAGE Wireless Earbuds Bluetooth Headphones 5.0 Earpods 6D Bass Airpods Earphones', 69, '2024-04-25 08:05:11', 0, 0, 'Air buds', '', 1),
(235, 'Realme earbuds NEWAGE Bluetooth Wireless Earp?ds Touch Control 6D Ear Pod Iphone Stereo Bass Earbuds Headphones Earphones With Display Headset', 69, '2024-04-25 08:05:11', 0, 0, 'Features:\n\nMini in-ear wireless invisible design;\n\nSuper Mini Size and hidden in the ear, no wearing burden;\n\nErgonomic earphone design, stable in the ear, good for driving, sports, business, or leisure;\n\nBluetooth Connection\n\nDeep DPS noise-reduction microphone ensures clear call quality;\n\nVoice prompt for pairing, calling, turn on/off;\n\nOne function button for on/off, song switch, language change, receive call.\n\nPACKAGE\n\n2x Mini Earphones (Left and Right Ear-buds)                            \n1x Charging box                            \n1x User Manual                            \n1*Micro-USB Cable', '', 1),
(238, 'Wolf Blass Cabernet Sauv 750ml\r\n', 1, '2024-04-25 21:13:36', 3, 147, 'Wolf Blass Cabernet Sauv 750ml\r\n', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `p_imgeid` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`p_imgeid`, `image`, `product_id`) VALUES
(3, '7678565_NzUwLTEwODktYTc5ZjMyZGEyMy0y.webp', 136),
(4, 'nana.jpg', 140),
(5, 'download.jpg', 141),
(6, 's-l1600.jpg', 142),
(7, '311106191_412925094371170_7265707649935176760_n.png', 143),
(8, 'real_apple_600x.jpg', 144),
(9, 'Eva-150CL-BIG.jpg', 145),
(10, 'UAU-02_839406ae-b71f-4f5c-93ff-aeb48d1c8c71.webp', 146),
(11, '71690_1634718718.png', 147),
(12, '312ac7785244c0f4dac97d53b8136217c865f469_2048x2048.jpg', 149),
(13, '1 (5).jpg', 150),
(14, 'bigbullrice.jpg', 151),
(15, 'b50kg.jpg', 152),
(16, '1 (6).jpg', 153),
(17, '1.jpg', 154),
(18, '1 (7).jpg', 155),
(19, 'gg.jpg', 156),
(20, '-original-imagyr3v4fnbtecr.webp', 157),
(21, '14-starlight.jpg', 158),
(22, '14-starlight.jpg', 159),
(23, 'hi.jpg', 160),
(24, '17.jpg', 161),
(25, '3 (1).jpg', 162),
(26, '2 (1).jpg', 163),
(27, '1 (1).jpg', 164),
(28, '1 (8).jpg', 165),
(29, '71wN1-1wkRL._AC_SX679_.jpg', 166),
(30, '41bIlvE1rdL._AC_SX679_.jpg', 167),
(31, '71QT5lUEhiL._AC_SL1500_.jpg', 168),
(33, '1712266976', 179),
(34, '1712771453', 180),
(35, '1712783120', 181),
(36, '1712857017', 182),
(37, '1712859663', 183),
(38, '1712937040', 184),
(39, '1713735656', 191),
(40, '1713735704', 192),
(41, '1713735764', 193),
(42, '1713736310', 194),
(43, '1713736628', 195),
(44, '1713736944', 196);

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review_text` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `product_id` int(11) NOT NULL,
  `inventory_item` int(11) NOT NULL,
  `rating` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`review_id`, `user_id`, `review_text`, `date_created`, `product_id`, `inventory_item`, `rating`) VALUES
(12, 27, 'sgrgedrgaerg', '2023-09-09 22:49:08', 36, 64, 'good'),
(13, 27, 'dfgsetdh', '2023-09-09 22:50:13', 36, 64, 'excellent'),
(14, 27, 'srhsertj', '2023-09-09 22:50:20', 36, 64, 'great'),
(15, 27, 'rhsrtjrt', '2023-09-09 22:50:26', 36, 64, 'ok'),
(16, 27, 'dfhsrthr', '2023-09-09 22:50:34', 36, 64, 'bad'),
(17, 27, 'dsfwe', '2023-09-09 23:11:45', 36, 64, 'good'),
(18, 27, 'drh', '2023-09-09 23:12:18', 36, 64, 'ok'),
(19, 27, 'cnd', '2023-09-09 23:12:35', 36, 64, 'ok'),
(20, 27, 'y', '2023-09-11 17:31:49', 36, 64, 'ok'),
(21, 41, 'dfdfadf', '2023-11-28 15:32:22', 40, 68, 'ok'),
(22, 41, 'sdsdrhdhdathadthtrj fnfgmfymsgadrhed daerth', '2023-12-03 17:17:29', 2, 4, 'ok'),
(23, 41, 'sdfsgearqdgdr', '2024-01-23 11:00:01', 11, 20, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `promooffering`
--

CREATE TABLE `promooffering` (
  `promotion_offering_id` int(11) NOT NULL,
  `promotionid_` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `maxpromo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `promooffering`
--

INSERT INTO `promooffering` (`promotion_offering_id`, `promotionid_`, `product_id`, `date_created`, `maxpromo`) VALUES
(1, 1, 1, '2023-04-12', 0.25),
(2, 1, 6, '2023-04-12', 0.15),
(3, 1, 12, '2023-04-12', 0.1),
(4, 1, 24, '2023-04-04', 0.2),
(5, 1, 22, '2023-04-12', 0.15),
(6, 1, 44, '2023-04-04', 0.15),
(7, 1, 41, '2023-04-04', 0.2),
(8, 2, 35, '2023-05-06', 0.19),
(10, 2, 39, '2023-05-07', 0.23),
(11, 2, 29, '2023-05-07', 0.2),
(12, 2, 31, '2023-05-07', 0.2),
(13, 2, 32, '2023-05-07', 0.2),
(14, 2, 2, '2023-11-21', 9999),
(15, 2, 41, '2023-11-10', 0.1),
(16, 2, 6, '2023-11-23', 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotionid` int(11) NOT NULL,
  `season` text NOT NULL,
  `description` text DEFAULT NULL,
  `year` year(4) NOT NULL,
  `startdate` datetime NOT NULL,
  `enddate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promotionid`, `season`, `description`, `year`, `startdate`, `enddate`) VALUES
(1, 'Summer', NULL, '2023', '2023-04-18 00:00:00', '2024-05-05 00:00:00'),
(3, 'Summer', 'Electronics Sale', '2024', '2023-04-01 00:00:00', '2024-06-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `promotion_items`
--

CREATE TABLE `promotion_items` (
  `promoitemi_d` int(11) NOT NULL,
  `promooffering_id` int(11) NOT NULL,
  `regularPrice` float NOT NULL,
  `promoPrice` float NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `InventoryItemID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotion_items`
--

INSERT INTO `promotion_items` (`promoitemi_d`, `promooffering_id`, `regularPrice`, `promoPrice`, `date_added`, `InventoryItemID`) VALUES
(1, 1, 1000, 800, '2023-11-20 13:19:37', 1),
(3, 16, 700000, 650000, '2023-11-21 19:38:10', 21);

-- --------------------------------------------------------

--
-- Table structure for table `promotion_message`
--

CREATE TABLE `promotion_message` (
  `promotion_message_id` int(11) NOT NULL,
  `title_message` varchar(100) NOT NULL,
  `price_explainer` varchar(100) NOT NULL,
  `promotion_item` int(11) NOT NULL,
  `banner` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotion_message`
--

INSERT INTO `promotion_message` (`promotion_message_id`, `title_message`, `price_explainer`, `promotion_item`, `banner`, `link`) VALUES
(1, 'Phone (2)', 'The new Glyph Interface', 3, 'notting.jpg', 'https://goodguyng.com/product-detail.php?itemid=21');

-- --------------------------------------------------------

--
-- Table structure for table `reset_token_password`
--

CREATE TABLE `reset_token_password` (
  `token_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(200) NOT NULL,
  `expired` int(11) NOT NULL DEFAULT 1,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reset_token_password`
--

INSERT INTO `reset_token_password` (`token_id`, `user_id`, `token`, `expired`, `date_created`) VALUES
(1, 41, 'guygogyu98', 0, '2024-01-02 15:49:10'),
(2, 41, 'd41d8cd98f00b204e9800998ecf8427e', 0, '2024-01-03 16:04:59'),
(3, 41, '2d0138304c74560109eab61645be6ef9', 0, '2024-01-03 16:05:28'),
(4, 41, '1b5a55ae99cc133ecca348723d96e544', 0, '2024-01-03 16:06:26'),
(5, 41, '55bcc87eee1a5b35e0ac86234e23c182', 0, '2024-01-03 16:10:45'),
(8, 41, 'b66a971ec87a39b7ee6966513c29c546', 0, '2024-01-04 08:54:35'),
(9, 41, '06c6e7a0ac099ad37fe22f65fa732f2c', 0, '2024-01-04 11:43:39'),
(10, 41, '7ecd57c8e3f9b9ea482e36024a85ae05', 1, '2024-01-04 21:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `saletransaction`
--

CREATE TABLE `saletransaction` (
  `SaleID` int(11) NOT NULL,
  `transactionType` int(11) NOT NULL,
  `amount` float NOT NULL,
  `PaymentMethod` varchar(30) NOT NULL,
  `orderID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `shipmentID` int(11) NOT NULL,
  `shipmentAddress` int(11) NOT NULL,
  `deliverydate` date NOT NULL,
  `status` varchar(1120) NOT NULL,
  `cost` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`shipmentID`, `shipmentAddress`, `deliverydate`, `status`, `cost`) VALUES
(1, 1, '2024-03-09', 'NOT STARTED', 0),
(2, 5, '2024-03-12', 'NOT STARTED', 110000),
(3, 5, '2024-03-12', 'NOT STARTED', 55000),
(4, 5, '2024-03-13', 'NOT STARTED', 110000),
(5, 6, '2024-03-13', 'NOT STARTED', 18000),
(6, 6, '2024-03-13', 'NOT STARTED', 2600),
(7, 6, '2024-03-13', 'NOT STARTED', 3000),
(8, 9, '2024-03-20', 'NOT STARTED', 2000),
(9, 9, '2024-03-20', 'NOT STARTED', 2000),
(10, 10, '2024-03-21', 'NOT STARTED', 2000),
(11, 10, '2024-03-21', 'NOT STARTED', 2000),
(12, 11, '2024-03-21', 'NOT STARTED', 3000),
(13, 11, '2024-03-22', 'NOT STARTED', 3000),
(14, 11, '2024-03-22', 'NOT STARTED', 3000),
(15, 10, '2024-03-24', 'NOT STARTED', 2000),
(16, 5, '2024-03-28', 'NOT STARTED', 2000),
(17, 5, '2024-03-28', 'NOT STARTED', 2000),
(18, 6, '2024-03-28', 'NOT STARTED', 3000),
(19, 6, '2024-03-28', 'NOT STARTED', 3000),
(20, 6, '2024-03-28', 'NOT STARTED', 3000),
(21, 11, '2024-04-15', 'NOT STARTED', 3000),
(22, 5, '2024-04-21', 'NOT STARTED', 2000),
(23, 12, '2024-04-22', 'NOT STARTED', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `shipping_address_no` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address1` varchar(600) NOT NULL,
  `address2` varchar(600) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `city` varchar(200) NOT NULL,
  `ship_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`shipping_address_no`, `customer_id`, `address1`, `address2`, `state`, `zip`, `city`, `ship_cost`) VALUES
(2, 40, 'no 407 yankaba kawaji', 'nassarawa nigeria', 'Nigeria', '00000', '', 2),
(3, 40, 'No 22 yankaba kawaji Qtrs ', 'Hadejia Road kano', 'Kano', '980987', '', 1),
(4, 45, 'fdhdty', 'fjdf', 'rtrt', '55555', '', 1),
(5, 41, 'No 32 Marina Road Ikoyi iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'Appartment number 31', 'Lagos', '000000000', 'Lagos', 2),
(6, 41, 'No 33 Saint finberss college Road Yaba Lagos', 'No 29 ', 'lagos', '100213', 'Lagos', 1),
(8, 81, 'No 31 Saint finberss college Road Yaba Lagos', 'No 29 Yankaba kawaji Qtrs yaba Lagos', 'lagos', '100213', '', 1),
(9, 82, 'No 31 Saint finberss college Road Yaba Lagos', 'No 29 Yankaba kawaji Qtrs yaba Lagos', 'lagos', '100213', '', 2),
(10, 83, 'eferferf', 'ewfeferfe', 'erferfer', '32513', '', 2),
(11, 84, 'No 11 yaba Ebutemeta Lagos', 'Near Zenith Bank', 'Lagos', '12343', '', 1),
(12, 85, 'N knjnj', 'hbjcfg', 'iuhkugg', 'iugfyu', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_areas`
--

CREATE TABLE `shipping_areas` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(200) NOT NULL,
  `area_cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_areas`
--

INSERT INTO `shipping_areas` (`area_id`, `area_name`, `area_cost`) VALUES
(1, 'lekki 1', 3000),
(2, 'Yaba', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_policy`
--

CREATE TABLE `shipping_policy` (
  `shipping_policy_id` int(11) NOT NULL,
  `shipping_policy` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_policy`
--

INSERT INTO `shipping_policy` (`shipping_policy_id`, `shipping_policy`) VALUES
(1, 'No return once accepted'),
(2, 'Customer can return once before 7 days'),
(3, 'Customer can return and only exchange with similar item or product');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sup_id` int(11) NOT NULL,
  `sup_company_name` varchar(300) NOT NULL,
  `sup_address` varchar(600) NOT NULL,
  `sup_phone_number` varchar(20) NOT NULL,
  `sup_contact_person_name` varchar(200) NOT NULL,
  `sup_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `sup_company_name`, `sup_address`, `sup_phone_number`, `sup_contact_person_name`, `sup_email`) VALUES
(1, 'ABK Globals', 'No 32 Lagos street kano', '+23480546795', 'Mr Alabi Ikeja', '0'),
(2, 'BBBK Global International', 'No 31 lagos street ikeja', '+23480546794', 'Mr Aisha Usman', 'bbbcontact@gmail.com'),
(3, 'In House', 'No 31 saint finberss road akoka lagos', '08051067944', 'Mr Ibrahim', 'care@goodguyng.com');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `a` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`a`) VALUES
(11),
(11),
(11),
(12),
(12),
(12),
(20),
(23),
(99),
(12),
(12),
(12),
(12),
(12),
(11),
(12),
(12),
(11),
(13),
(13),
(10),
(10),
(10),
(11),
(12),
(12),
(11);

-- --------------------------------------------------------

--
-- Table structure for table `variation`
--

CREATE TABLE `variation` (
  `vid` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `variation`
--

INSERT INTO `variation` (`vid`, `product_id`, `name`) VALUES
(1, 45, 'size'),
(2, 45, 'color'),
(5, 60, 'size'),
(6, 60, 'color'),
(7, 103, 'size'),
(8, 32, 'color'),
(9, 32, 'size'),
(10, 101, 'size'),
(11, 101, 'color'),
(12, 101, 'Heels'),
(13, 30, 'color');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlistid` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `inventory_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlistid`, `customer_id`, `inventory_item_id`) VALUES
(17, 26, 23),
(16, 26, 46),
(18, 41, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD KEY `cart_fk` (`cartid`);

--
-- Indexes for table `category_new`
--
ALTER TABLE `category_new`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`);

--
-- Indexes for table `customeraddress`
--
ALTER TABLE `customeraddress`
  ADD PRIMARY KEY (`c_addressID`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`orderNO`);

--
-- Indexes for table `customer_order_address`
--
ALTER TABLE `customer_order_address`
  ADD PRIMARY KEY (`customer_address_id`);

--
-- Indexes for table `deliveypersonel`
--
ALTER TABLE `deliveypersonel`
  ADD PRIMARY KEY (`deliveryPersonelID`);

--
-- Indexes for table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`featuredid`),
  ADD UNIQUE KEY `inventoryItemId` (`inventoryItemId`);

--
-- Indexes for table `inventoryitem`
--
ALTER TABLE `inventoryitem`
  ADD PRIMARY KEY (`InventoryItemID`),
  ADD KEY `product_item_fk` (`productItemID`),
  ADD KEY `category_fk` (`category`);

--
-- Indexes for table `inventory_item_image`
--
ALTER TABLE `inventory_item_image`
  ADD PRIMARY KEY (`inventory_item_image_id`);

--
-- Indexes for table `item_itemdification`
--
ALTER TABLE `item_itemdification`
  ADD UNIQUE KEY `inventory_item_id` (`inventory_item_id`,`Product_id`,`upc_code`);

--
-- Indexes for table `lm_orders`
--
ALTER TABLE `lm_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `lm_order_line`
--
ALTER TABLE `lm_order_line`
  ADD KEY `fk_order_lines_inventory_items` (`InventoryItemID`),
  ADD KEY `fk_order_lines` (`orderID`) USING BTREE;

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`newsletter_id`),
  ADD UNIQUE KEY `newslatter__` (`newsletter_`);

--
-- Indexes for table `phonenumber`
--
ALTER TABLE `phonenumber`
  ADD PRIMARY KEY (`phone_id`);

--
-- Indexes for table `productitem`
--
ALTER TABLE `productitem`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`p_imgeid`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `promooffering`
--
ALTER TABLE `promooffering`
  ADD PRIMARY KEY (`promotion_offering_id`),
  ADD UNIQUE KEY `promotionid_` (`promotionid_`,`product_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotionid`);

--
-- Indexes for table `promotion_items`
--
ALTER TABLE `promotion_items`
  ADD PRIMARY KEY (`promoitemi_d`),
  ADD UNIQUE KEY `promoitemi_d` (`promoitemi_d`,`promooffering_id`),
  ADD KEY `promoitem_fk` (`promooffering_id`),
  ADD KEY `fk_inventory_to_promotion_item` (`InventoryItemID`);

--
-- Indexes for table `promotion_message`
--
ALTER TABLE `promotion_message`
  ADD PRIMARY KEY (`promotion_message_id`),
  ADD KEY `promotion_fk_banner` (`promotion_item`);

--
-- Indexes for table `reset_token_password`
--
ALTER TABLE `reset_token_password`
  ADD PRIMARY KEY (`token_id`),
  ADD KEY `reset_token_fk` (`user_id`);

--
-- Indexes for table `saletransaction`
--
ALTER TABLE `saletransaction`
  ADD PRIMARY KEY (`SaleID`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`shipmentID`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`shipping_address_no`);

--
-- Indexes for table `shipping_areas`
--
ALTER TABLE `shipping_areas`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `shipping_policy`
--
ALTER TABLE `shipping_policy`
  ADD PRIMARY KEY (`shipping_policy_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `variation`
--
ALTER TABLE `variation`
  ADD PRIMARY KEY (`vid`),
  ADD KEY `fk_variation_on_category_new_table` (`product_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlistid`),
  ADD UNIQUE KEY `customer_id` (`customer_id`,`inventory_item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_new`
--
ALTER TABLE `category_new`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `customeraddress`
--
ALTER TABLE `customeraddress`
  MODIFY `c_addressID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `orderNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer_order_address`
--
ALTER TABLE `customer_order_address`
  MODIFY `customer_address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deliveypersonel`
--
ALTER TABLE `deliveypersonel`
  MODIFY `deliveryPersonelID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featured`
--
ALTER TABLE `featured`
  MODIFY `featuredid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventoryitem`
--
ALTER TABLE `inventoryitem`
  MODIFY `InventoryItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `inventory_item_image`
--
ALTER TABLE `inventory_item_image`
  MODIFY `inventory_item_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1277;

--
-- AUTO_INCREMENT for table `lm_orders`
--
ALTER TABLE `lm_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `newsletter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `phonenumber`
--
ALTER TABLE `phonenumber`
  MODIFY `phone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `productitem`
--
ALTER TABLE `productitem`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `p_imgeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `promooffering`
--
ALTER TABLE `promooffering`
  MODIFY `promotion_offering_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `promotion_items`
--
ALTER TABLE `promotion_items`
  MODIFY `promoitemi_d` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `promotion_message`
--
ALTER TABLE `promotion_message`
  MODIFY `promotion_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reset_token_password`
--
ALTER TABLE `reset_token_password`
  MODIFY `token_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `saletransaction`
--
ALTER TABLE `saletransaction`
  MODIFY `SaleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `shipmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `shipping_address_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shipping_areas`
--
ALTER TABLE `shipping_areas`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shipping_policy`
--
ALTER TABLE `shipping_policy`
  MODIFY `shipping_policy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `variation`
--
ALTER TABLE `variation`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlistid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD CONSTRAINT `cart_fk` FOREIGN KEY (`cartid`) REFERENCES `cart` (`cartid`) ON DELETE CASCADE;

--
-- Constraints for table `featured`
--
ALTER TABLE `featured`
  ADD CONSTRAINT `fk_featured_inventory` FOREIGN KEY (`inventoryItemId`) REFERENCES `inventoryitem` (`InventoryItemID`);

--
-- Constraints for table `inventoryitem`
--
ALTER TABLE `inventoryitem`
  ADD CONSTRAINT `category_fk` FOREIGN KEY (`category`) REFERENCES `category_new` (`cat_id`),
  ADD CONSTRAINT `product_item_fk` FOREIGN KEY (`productItemID`) REFERENCES `productitem` (`productID`);

--
-- Constraints for table `lm_order_line`
--
ALTER TABLE `lm_order_line`
  ADD CONSTRAINT `fk_order_lines` FOREIGN KEY (`orderID`) REFERENCES `lm_orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_order_lines_inventory_items` FOREIGN KEY (`InventoryItemID`) REFERENCES `inventoryitem` (`InventoryItemID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promotion_items`
--
ALTER TABLE `promotion_items`
  ADD CONSTRAINT `fk_inventory_to_promotion_item` FOREIGN KEY (`InventoryItemID`) REFERENCES `inventoryitem` (`InventoryItemID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `promoitem_fk` FOREIGN KEY (`promooffering_id`) REFERENCES `promooffering` (`promotion_offering_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promotion_message`
--
ALTER TABLE `promotion_message`
  ADD CONSTRAINT `promotion_fk_banner` FOREIGN KEY (`promotion_item`) REFERENCES `promotion_items` (`promoitemi_d`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reset_token_password`
--
ALTER TABLE `reset_token_password`
  ADD CONSTRAINT `reset_token_fk` FOREIGN KEY (`user_id`) REFERENCES `customer` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
