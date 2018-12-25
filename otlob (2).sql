-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 06:33 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otlob`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` text,
  `Description` text,
  `Image` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `Title`, `Description`, `Image`, `created_at`, `updated_at`) VALUES
(1, '3Fashion for <span class=\'h-color\'>women</span>', '<span class=\'h-color\'>Clean</span> and elegant design with a modern style2.', 'images/slider/2018-12-02-12-28-31chicago.jpg', '2018-07-29 03:25:46', '2018-07-29 03:25:46'),
(3, '2Fashion for <span class=\'h-color\'>women</span>', '<span class=\'h-color\'>Clean</span> and elegant design with a modern style1.', 'images/slider/b.jpg', '2018-07-29 03:25:46', '2018-07-29 03:25:46'),
(4, '1Fashion for <span class=\'h-color\'>women</span>', '<span class=\'h-color\'>Clean</span> and elegant design with a modern style.', 'images/slider/c.jpg', '2018-07-29 03:25:46', '2018-07-29 03:25:46');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand`, `image`) VALUES
(1, 'sony', 'images/brands/1.png'),
(3, 'test1', 'images/brands/2.png'),
(4, 'LG', 'images/brands/3.png'),
(5, 'sony1', 'images/brands/1.png'),
(6, 'test11', 'images/brands/2.png'),
(7, 'LG1', 'images/brands/3.png'),
(8, 'sony2', 'images/brands/1.png'),
(9, 'test2', 'images/brands/2.png'),
(10, 'LG2', 'images/brands/3.png');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`) VALUES
(1, 'laptops', 'images/categories/laptops/a.jpg'),
(2, 'cameras', 'images/categories/2018-12-02-20-31-13chicago.jpg'),
(3, 'printers', 'images/categories/printers/a.jpg'),
(4, 'T-Shirt', 'images/categories/2018-11-24-16-40-07ny.jpg'),
(5, 'qwqwqwqw', 'images/categories/2018-12-02-18-56-37ny.jpg'),
(6, 'qwqwqwqw', 'images/categories/2018-12-02-18-57-22ny.jpg'),
(7, 'sadasdasd', 'images/categories/2018-12-02-18-58-50la.jpg'),
(8, 'sdasdasd', 'images/categories/2018-12-02-18-59-08chicago.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `first_name` text,
  `last_name` text,
  `email` text,
  `phone` text,
  `address` text,
  `password` text,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `password`, `image`) VALUES
(1, 'Mohamad', 'kabalan', 'mkabalane@gmail.com', '76053730', 'Beirut / Dekweneh/Mar roukoz  /facing aul university / 3 floor', '123456', NULL),
(2, 'sami', 'ahmad', 'sami@gmail.com', '789456123', 'city/area/street /building 3', '123456', NULL),
(3, 'sandy', 'ayoub', 'sandy@gmail.com', '844648484', 'city/area/street /building 3', '123456', NULL),
(4, 'anthony', 'tahtouh', 'anthony@gmail.com', '12345678', 'city/area/street /building 3', '123456', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color`) VALUES
(1, 'white'),
(2, 'silver'),
(3, 'gray'),
(4, 'black'),
(5, 'red'),
(6, 'maroon'),
(7, 'yellow'),
(8, 'olive'),
(9, 'lime'),
(10, 'green'),
(11, 'aqua'),
(12, 'teal'),
(13, 'blue'),
(14, 'navy'),
(15, 'fuchsia'),
(16, 'purple');

-- --------------------------------------------------------

--
-- Table structure for table `commentsonitems`
--

CREATE TABLE `commentsonitems` (
  `ID` int(11) NOT NULL,
  `text` text NOT NULL,
  `date` text NOT NULL,
  `item_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentsonitems`
--

INSERT INTO `commentsonitems` (`ID`, `text`, `date`, `item_ID`, `user_ID`) VALUES
(2, 'comment', '12/12/12', 1, 9),
(3, 'ghh', '2016-08-13 16:46', 1, 9),
(4, 'ggh', '2016-08-13 16:47', 1, 9),
(5, 'ooooo', '2016-08-13 16:47', 1, 9),
(6, ' rvrvfb', '2016-08-13 16:48', 1, 9),
(7, 'fb', '2016-08-13 16:48', 1, 9),
(8, 'bf f ', '2016-08-13 16:48', 1, 9),
(9, 'ffffg', '2016-08-13 16:48', 1, 9),
(14, 'drop', '2016-08-13 16:48', 1, 9),
(46, 'ÙˆÙˆ', '2016-08-15 12:39', 2, 9),
(48, 'knljk', '1212121', 1, 2),
(50, 'ths is commmmmm hxhfhfjcjj ucifigivi ivivi ', '2016-08-15 15:38', 3, 9),
(52, 'j', '2016-08-17 15:36', 23, 9),
(58, 'vvx', '2016-09-06 09:01', 10, 9),
(59, 'jvj', '2016-09-22 05:34', 9, 9),
(60, 'ggx', '2016-09-22 05:34', 9, 9),
(64, 'fgh', '2016-09-22 05:38', 10, 9),
(65, 'fuu', '2016-09-22 05:39', 10, 9),
(66, 'xf', '2016-09-22 05:48', 10, 9),
(67, 'fg', '2016-09-22 05:50', 10, 9),
(69, 'ncn', '2016-09-22 10:44', 7, 9),
(73, 'bxb', '2016-09-22 10:44', 7, 9);

-- --------------------------------------------------------

--
-- Table structure for table `commentsonmaintenance`
--

CREATE TABLE `commentsonmaintenance` (
  `ID` int(11) NOT NULL,
  `text` text NOT NULL,
  `date` text NOT NULL,
  `maintenance_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentsonmaintenance`
--

INSERT INTO `commentsonmaintenance` (`ID`, `text`, `date`, `maintenance_ID`, `user_ID`) VALUES
(1, 'Hello from trust', '2016-8-09 13:14', 1, 1),
(2, 'hello from ahmed', '2016-08-10 12:01', 1, 9),
(3, 'hello f', '2016-08-10 12:02', 1, 9),
(4, 'hi trust', '2016-08-10 12:06', 1, 9),
(5, 'hi ahmed', '2016-8-09 12:07', 1, 1),
(6, 'hiiii', '2016-08-10 12:07', 1, 9),
(7, 'hhhh', '2016-08-12 14:57', 1, 9),
(8, 'jj', '2016-08-12 14:57', 1, 9),
(9, 'jjjj', '2016-08-12 14:59', 1, 9),
(10, 'jhvvh', '2016-08-12 14:59', 1, 9),
(11, 'inibn', '2016-08-12 15:00', 1, 9),
(16, 'Ù‰Ù„Ù‰Ø©', '2016-08-13 09:58', 2, 9),
(17, 'ØªÙ†Ù†', '2016-08-13 09:59', 1, 9),
(18, '.\nØ¨Ù„ÙŠÙ„Ø© ', '2016-08-15 15:13', 2, 9),
(19, 't8t', '2016-08-20 10:41', 2, 9),
(20, 'ekweokf', '2016-08-20 12:48', 1, 9),
(21, 'ghdhud', '2016-08-22 03:55', 1, 9),
(22, 'ok plz xgejcsghd', '2016-08-22 04:40', 1, 9),
(23, 'ok plz xgejcsghd', '2016-08-22 04:40', 1, 9),
(24, 'f', '2016-08-22 06:00', 1, 9),
(25, 'jjdkkfi', '2016-08-22 07:30', 2, 9),
(26, 'fd', '2016-08-22 07:30', 2, 9),
(27, 'fdf', '2016-08-22 07:30', 2, 9),
(28, 'fdf', '2016-08-22 07:30', 2, 9),
(29, 'd', '2016-08-22 07:30', 2, 9),
(30, 'd', '2016-08-22 07:30', 2, 9),
(31, 'd', '2016-08-22 07:30', 2, 9),
(32, 'd', '2016-08-22 07:30', 2, 9),
(33, 'd', '2016-08-22 07:30', 2, 9),
(34, 'd', '2016-08-22 07:30', 2, 9),
(35, 'dd', '2016-08-22 07:30', 2, 9),
(36, 'd', '2016-08-22 07:30', 2, 9),
(37, 'd', '2016-08-22 07:30', 2, 9),
(38, 'dd', '2016-08-22 07:30', 2, 9),
(39, 'dd', '2016-08-22 07:30', 2, 9),
(40, 'd', '2016-08-22 07:30', 2, 9),
(41, 'dd', '2016-08-22 07:30', 2, 9),
(42, 'd', '2016-08-22 07:30', 2, 9),
(43, 'd', '2016-08-22 07:30', 2, 9),
(44, 'dd', '2016-08-22 07:30', 2, 9),
(45, 'w', '2016-08-22 07:30', 2, 9),
(46, 'w', '2016-08-22 07:30', 2, 9),
(47, 's', '2016-08-22 07:30', 2, 9),
(48, 'ss', '2016-08-22 07:30', 2, 9),
(49, 's', '2016-08-22 07:30', 2, 9),
(50, 'c', '2016-08-22 07:30', 2, 9),
(51, 'eeg', '2016-08-22 07:31', 2, 9),
(52, 'eeg', '2016-08-22 07:31', 2, 9),
(53, 'eegg', '2016-08-22 07:31', 2, 9),
(54, 'eeggg', '2016-08-22 07:31', 2, 9),
(55, 'eegggf', '2016-08-22 07:31', 2, 9),
(56, 'f', '2016-08-22 07:31', 2, 9),
(57, 'f', '2016-08-22 07:31', 2, 9),
(58, 'Ø§Ù„Ø³Ù„Ø§Ù… Ø¹Ù„ÙŠÙƒÙ… ', '2016-08-27 13:30', 2, 9),
(59, 'vv', '2016-09-03 04:40', 2, 9),
(60, 'gh', '2016-09-03 04:41', 2, 9),
(61, 'hjx', '2016-09-05 06:18', 2, 9),
(62, 'c', '2016-09-05 06:18', 2, 9),
(63, 'v', '2016-09-05 06:18', 2, 9),
(64, 'vvg', '2016-09-06 08:59', 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `commentsonposts`
--

CREATE TABLE `commentsonposts` (
  `ID` int(11) NOT NULL,
  `text` text NOT NULL,
  `date` text NOT NULL,
  `user_ID` int(11) NOT NULL,
  `post_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentsonposts`
--

INSERT INTO `commentsonposts` (`ID`, `text`, `date`, `user_ID`, `post_ID`) VALUES
(2, 'dcc', '2016-09-05 06:15', 9, 2),
(3, 'thanx man , hi ', '2016-09-05 06:18', 9, 1),
(4, 'vkfjcj', '2016-09-22 11:00', 9, 1),
(5, 'vkfjcj', '2016-09-22 11:00', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `itemdetails`
--

CREATE TABLE `itemdetails` (
  `id` bigint(20) NOT NULL,
  `size` text,
  `color` text,
  `itemID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemdetails`
--

INSERT INTO `itemdetails` (`id`, `size`, `color`, `itemID`) VALUES
(1, 'xl', 'black', 1),
(2, 'L', 'blue', 1),
(3, 'xl', 'Red', 1),
(4, 'L', 'Yelow', 1);

-- --------------------------------------------------------

--
-- Table structure for table `itemimages`
--

CREATE TABLE `itemimages` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `itemID` int(11) NOT NULL,
  `main` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemimages`
--

INSERT INTO `itemimages` (`id`, `link`, `itemID`, `main`) VALUES
(1, 'images/items/2018-12-05-18-37-13succinct.png', 1, 1),
(2, 'images/items/2.jpg', 2, 1),
(3, 'images/items/3.jpg', 3, 1),
(4, 'images/items/4.jpg', 4, 1),
(5, 'images/items/5.jpg', 2, 0),
(6, 'images/items/6.jpg', 2, 0),
(7, 'images/items/7.jpg', 2, 0),
(8, 'images/items/8.jpg', 8, 1),
(9, 'images/items/9.jpg', 9, 1),
(10, 'images/items/10.jpg', 10, 1),
(12, 'images/items/11.jpg', 11, 1),
(13, 'images/items/12.jpg', 12, 1),
(14, 'images/items/13.jpg', 13, 1),
(15, 'images/items/14.jpg', 14, 1),
(16, 'images/items/1.jpg', 15, 1),
(17, 'images/items/2.jpg', 16, 1),
(18, 'images/items/3.jpg', 17, 1),
(19, 'images/items/4.jpg', 18, 1),
(20, 'images/items/5.jpg', 19, 1),
(21, 'images/items/6.jpg', 20, 1),
(22, 'images/items/7.jpg', 22, 1),
(23, 'images/items/8.jpg', 23, 1),
(24, 'images/items/9.jpg', 24, 1),
(25, 'images/items/11.jpg', 25, 1),
(26, 'images/items/11.jpg', 26, 1),
(27, 'images/items/12.jpg', 27, 1),
(28, 'images/items/13.jpg', 28, 1),
(29, 'images/items/14.jpg', 29, 1),
(30, 'images/items/1.jpg', 30, 1),
(31, 'images/items/2.jpg', 31, 1),
(32, 'images/items/3.jpg', 32, 1),
(33, 'images/items/4.jpg', 33, 1),
(34, 'images/items/5.jpg', 34, 1),
(35, 'images/items/6.jpg', 35, 1),
(36, 'images/items/7.jpg', 36, 1),
(37, 'images/items/8.jpg', 37, 1),
(38, 'images/items/9.jpg', 38, 1),
(39, 'images/items/10.jpg', 39, 1),
(40, 'images/items/11.jpg', 40, 1),
(41, 'images/items/12.jpg', 42, 1),
(42, 'images/items/13.jpg', 43, 1),
(43, 'images/items/14.jpg', 44, 1),
(44, 'images/items/1.jpg', 45, 1),
(45, 'images/items/2.jpg', 46, 1),
(46, 'images/items/3.jpg', 47, 1),
(47, 'images/items/4.jpg', 48, 1),
(48, 'images/items/5.jpg', 49, 1),
(49, 'images/items/6.jpg', 50, 1),
(50, 'images/items/7.jpg', 51, 1),
(51, 'images/items/8.jpg', 52, 1),
(52, 'images/items/9.jpg', 53, 1),
(53, 'images/items/11.jpg', 54, 1),
(54, 'images/items/11.jpg', 56, 1),
(55, 'images/items/2018-12-02-11-47-49la.jpg', 63, 1),
(56, 'images/items/2018-12-02-13-09-11la.jpg', 64, 1),
(57, 'images/items/2018-12-02-13-10-31ny.jpg', 65, 1),
(58, 'images/items/2018-12-02-20-03-10chicago.jpg', 66, 1),
(59, 'images/items/2018-12-02-20-55-08la.jpg', 67, 1),
(60, 'images/items/2018-12-05-13-11-01a.png', 68, 1),
(61, 'images/items/2018-12-05-13-17-33a.png', 69, 1),
(62, 'images/items/2018-12-05-13-17-33b.jpg', 69, 0),
(63, 'images/items/2018-12-05-13-17-33d.jpg', 69, 0),
(64, 'images/items/2018-12-05-13-48-16a.png', 70, 1),
(65, 'images/items/2018-12-05-13-48-16b.jpg', 70, 0),
(66, 'images/items/2018-12-05-13-50-24a.png', 71, 1),
(67, 'images/items/2018-12-05-13-50-24b.jpg', 71, 0),
(68, 'images/items/2018-12-05-13-50-24d.jpg', 71, 0),
(69, 'images/items/2018-12-05-13-51-48cafe.png', 72, 1),
(70, 'images/items/2018-12-05-13-51-48download.jpg', 72, 0),
(71, 'images/items/2018-12-05-13-54-29a.png', 73, 1),
(72, 'images/items/2018-12-05-13-54-29cafe.png', 73, 0),
(73, 'images/items/2018-12-05-13-54-29chronicle.png', 73, 0),
(74, 'images/items/2018-12-05-18-28-02sales.png', 1, 0),
(75, 'images/items/2018-12-05-18-28-10cafe.png', 1, 0),
(76, 'images/items/2018-12-05-18-37-34billiard.png', 1, 0),
(77, 'images/items/2018-12-05-19-05-55e.png', 1, 0),
(78, 'images/items/2018-12-06-18-43-02chronicle.png', 74, 1),
(79, 'images/items/2018-12-06-18-43-37chronicle.png', 75, 1),
(80, 'images/items/2018-12-06-19-37-05cafe.png', 76, 1),
(81, 'images/items/2018-12-06-19-48-05cafe.png', 77, 1),
(82, 'images/items/2018-12-06-19-49-30chronicle.png', 78, 1),
(83, 'images/items/2018-12-06-19-52-03chronicle.png', 79, 1),
(84, 'images/items/2018-12-06-19-54-18chronicle.png', 80, 1),
(85, 'images/items/2018-12-06-19-58-41chronicle.png', 81, 1),
(86, 'images/items/2018-12-06-20-01-22chronicle.png', 82, 1),
(87, 'images/items/2018-12-07-21-42-12billiard.png', 83, 1),
(88, 'images/items/2018-12-07-22-12-02education.png', 84, 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` double NOT NULL,
  `discount` int(11) NOT NULL,
  `text` text NOT NULL,
  `OutOfStock` int(11) NOT NULL,
  `category_ID` int(11) NOT NULL,
  `subCategory_ID` int(11) NOT NULL,
  `NewArrival` int(11) NOT NULL,
  `NewArrivalStopDate` date NOT NULL,
  `discountStopDate` date NOT NULL,
  `brandID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `discount`, `text`, `OutOfStock`, `category_ID`, `subCategory_ID`, `NewArrival`, `NewArrivalStopDate`, `discountStopDate`, `brandID`) VALUES
(1, 'Laptop toshiba12', 470, 20, 'this is laptop toshba1', 0, 1, 1, 1, '0000-00-00', '2018-12-22', 3),
(2, 'Camera Canon', 200, 10, 'this is camera', 1, 1, 1, 0, '0000-00-00', '2018-12-22', 0),
(3, 'HeadPhones', 12, 15, 'head phones ', 0, 1, 1, 0, '0000-00-00', '2018-12-22', 0),
(4, 'Printer a', 75, 30, 'this is printer', 0, 1, 1, 0, '0000-00-00', '2018-12-22', 0),
(5, 'Laptop Hp 1', 3001, 0, 'this is hp', 1, 2, 0, 0, '2018-12-18', '2018-12-26', 0),
(6, 'Vaio', 500, 0, 'this is vaio', 0, 2, 0, 0, '0000-00-00', '2018-12-22', 0),
(7, 'Mac', 1000, 0, 'this is mac', 0, 2, 0, 0, '0000-00-00', '2018-12-22', 0),
(8, 'usb cable', 1, 0, 'this usb', 0, 3, 0, 0, '0000-00-00', '2018-12-22', 0),
(9, 'Brohter printer A12', 100, 0, 'b', 0, 3, 0, 0, '0000-00-00', '2018-12-22', 0),
(10, 'Lenoveo laptop', 1200, 0, 'ef', 0, 3, 0, 0, '0000-00-00', '2018-12-22', 0),
(11, 'Speaker', 30, 0, 'ef', 0, 4, 0, 0, '0000-00-00', '2018-12-22', 0),
(12, 'item name', 225, 0, 'test desc', 1, 4, 1, 0, '0000-00-00', '2018-12-22', 0),
(15, 't-shirt1', 4001, 1, 't-shirt1 desc', 1, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(16, 't-shirt2', 200, 0, 'this is t-shirt2', 1, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(17, 't-shirt3', 12, 0, 't-shirt3', 0, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(18, 't-shirt4', 75, 0, 't-shirt4', 0, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(19, 't-shirt5', 300, 0, 't-shirt5', 0, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(20, 't-shirt6', 500, 0, 'this is t-shirt6', 0, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(21, 't-shirt7', 1000, 0, 'this is t-shirt7', 0, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(22, 't-shirt8', 1, 0, 't-shirt8', 0, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(23, 't-shirt9', 100, 0, 't-shirt9', 0, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(24, 't-shirt11', 30, 0, 't-shirt11', 0, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(25, 't-shirt12', 225, 0, 't-shirt112', 1, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(26, 't-shirt14', 4001, 0, 't-shirt14 desc', 1, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(27, 't-shirt15', 200, 0, 'this is t-shirt15', 1, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(28, 't-shirt16', 12, 0, 't-shirt16', 0, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(29, 't-shirt17', 75, 0, 't-shirt17', 0, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(30, 't-shirt18', 300, 0, 't-shirt18', 0, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(31, 't-shirt19', 500, 0, 'this is t-shirt19', 0, 5, 0, 1, '2018-11-04', '2018-12-22', 0),
(32, 't-shirt20', 1000, 0, 'this is t-shirt20', 0, 5, 0, 1, '2018-11-04', '2018-12-22', 0),
(33, 't-shirt21', 1, 0, 't-shirt21', 0, 5, 0, 1, '2018-11-04', '2018-12-22', 0),
(34, 't-shirt22', 100, 0, 't-shirt22', 0, 5, 0, 1, '2018-11-04', '2018-12-22', 0),
(35, 't-shirt23', 30, 0, 't-shirt23', 0, 5, 0, 1, '2018-12-24', '2018-12-22', 0),
(36, 't-shirt24', 225, 0, 't-shirt24', 1, 5, 0, 1, '2018-11-04', '2018-12-22', 0),
(37, 't-shirt26', 12, 0, 't-shirt26', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(38, 't-shirt27', 75, 0, 't-shirt27', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(39, 't-shirt28', 300, 0, 't-shirt28', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(40, 't-shirt29', 500, 0, 'this is t-shirt29', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(41, 't-shirt30', 1000, 0, 'this is t-shirt30', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(42, 't-shirt31', 1, 0, 't-shirt31', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(43, 't-shirt32', 100, 0, 't-shirt32', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(44, 't-shirt33', 30, 0, 't-shirt33', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(45, 't-shirt34', 225, 0, 't-shirt34', 1, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(46, 't-shirt35', 12, 0, 't-shirt35', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(47, 't-shirt36', 75, 0, 't-shirt36', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(48, 't-shirt37', 300, 0, 't-shirt37', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(49, 't-shirt38', 500, 0, 'this is t-shirt38', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(50, 't-shirt39', 1000, 0, 'this is t-shirt39', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(51, 't-shirt40', 1, 0, 't-shirt40', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(52, 't-shirt41', 100, 0, 't-shirt42', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(53, 't-shirt43', 30, 0, 't-shirt43', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(54, 't-shirt44', 225, 0, 't-shirt44', 1, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(55, 't-shirt45', 12, 0, 't-shirt45', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(56, 't-shirt46', 75, 0, 't-shirt46', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(57, 't-shirt47', 300, 0, 't-shirt47', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(58, 't-shirt48', 500, 0, 'this is t-shirt48', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(59, 't-shirt49', 1000, 0, 'this is t-shirt49', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(60, 't-shirt50', 1, 0, 't-shirt50', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(61, 't-shirt51', 100, 0, 't-shirt51', 0, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(62, 't-shirt52', 225, 12, 't-shirt52', 1, 5, 0, 0, '0000-00-00', '2018-12-22', 0),
(74, 'cdasdasd', 444, 22, 'asasdsadsad', 0, 2, 0, 0, '2018-12-28', '2018-12-22', 0),
(84, 'test', 555, 11, 'asasdsad', 1, 1, 0, 1, '2019-05-16', '2019-02-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `itemscolor`
--

CREATE TABLE `itemscolor` (
  `id` int(11) NOT NULL,
  `color` text NOT NULL,
  `itemID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemscolor`
--

INSERT INTO `itemscolor` (`id`, `color`, `itemID`) VALUES
(51, 'lime', 1),
(52, 'maroon', 1),
(53, 'navy', 1),
(54, 'aqua', 83),
(55, 'black', 83),
(56, 'blue', 83),
(57, 'aqua', 84),
(58, 'black', 84),
(59, 'blue', 84),
(60, 'fuchsia', 84),
(61, 'gray', 84);

-- --------------------------------------------------------

--
-- Table structure for table `item_reviews`
--

CREATE TABLE `item_reviews` (
  `ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `item_ID` int(11) NOT NULL,
  `rank` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_reviews`
--

INSERT INTO `item_reviews` (`ID`, `user_ID`, `item_ID`, `rank`) VALUES
(1, 1, 1, 2),
(2, 9, 1, 2),
(3, 9, 23, 0.5),
(4, 9, 3, 2.5),
(5, 0, 1, 4),
(6, 9, 10, 3),
(7, 9, 8, 2.5),
(8, 9, 11, 3),
(9, 0, 4, 3),
(10, 9, 4, 2.5),
(11, 9, 9, 2.5),
(12, 9, 7, 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `ID` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `text` text NOT NULL,
  `cost` double NOT NULL,
  `additional` text NOT NULL,
  `start_date` text NOT NULL,
  `end_date` text NOT NULL,
  `admin_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `review` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`ID`, `item_name`, `text`, `cost`, `additional`, `start_date`, `end_date`, `admin_ID`, `user_ID`, `status`, `review`) VALUES
(1, 'Toshiba laptop', 'whatever', 50, 'sfwef e e', '20/12/2012', '20/12/2014', 2, 9, 1, 1.5),
(2, 'Laptop Hp', 'this description this description this description this description this description this description this description this description this description this description this description this description this description this description this description this description this description this description this description this description this description ', 11, 'this description this description this description this description this description this description this description this description this description this description this description this description this description this description this description this description this description this description this description this description this description ', '20/10/2016', '20/11/2016', 2, 9, 0, 2.2999999523163);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `ID` int(11) NOT NULL,
  `start_date` text NOT NULL,
  `end_date` text NOT NULL,
  `status` int(11) NOT NULL,
  `item_ID` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`ID`, `start_date`, `end_date`, `status`, `item_ID`, `price`) VALUES
(1, '12/12/2012', '12/12/2016', 1, 3, 90),
(2, '12/12/1111', '12/12/12', 1, 6, 12);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `OrderDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `DeliveryDate` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `ClientID` int(11) NOT NULL,
  `totalPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `OrderDate`, `DeliveryDate`, `status`, `ClientID`, `totalPrice`) VALUES
(25, '2018-12-05 10:16:52', '0000-00-00 00:00:00', 'Pending', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `orderItemID` int(11) NOT NULL,
  `order_ID` int(11) NOT NULL,
  `item_ID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `color` text NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`orderItemID`, `order_ID`, `item_ID`, `quantity`, `color`, `size`) VALUES
(57, 25, 1, 2, 'yellow', ''),
(58, 25, 2, 2, 'green', ''),
(59, 25, 3, 3, 'black', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `text` text NOT NULL,
  `date_created` text NOT NULL,
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `text`, `date_created`, `user_ID`) VALUES
(1, 'This is text1 This is text1 This is text1 This is text1 This is text1 This is text1 This is text1 This is text1 This is text1 This is text1 This is text1 This is text1 This is text1 This is text1 ', '12/12/2012', 4);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `category_ID` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `category_ID`) VALUES
(1, 'accer1', '1'),
(2, 'test4', '2'),
(3, 'test5', '2'),
(4, 'test6', '2'),
(5, 'test7', '2'),
(6, 'newtest1', '3'),
(7, 'newtest2', '3'),
(17, 'qqqqq', '1'),
(9, 'asdasdsd', '4'),
(19, 'asdasdsa', '4'),
(20, 'adasdasdasd', '5'),
(21, 'aSasS', '5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `first_name` text,
  `last_name` text,
  `email` text,
  `phone` text,
  `address` text,
  `role` int(11) DEFAULT NULL,
  `password` text,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `first_name`, `last_name`, `email`, `phone`, `address`, `role`, `password`, `image`) VALUES
(1, 'admin', 'admin', 'mkabalane@gmail.com', '76053730', 'beirut', 1, '123456', NULL),
(2, 'first_name', 'last_name', 'email', NULL, 'address', 2, 'password', NULL),
(3, 'ygy', 'ggh', 'hh.@cf.com', NULL, 'hhh', 2, '5677', NULL),
(4, 'ygy', 'ggh', 'hhlll@cf.com', NULL, 'hhh', 2, '5677', NULL),
(5, 'ygy', 'ggh', 'hhlll@chhf.com', NULL, 'hhh', 2, '5677', NULL),
(6, 'first', 'last', 'ggg@hh.com', NULL, 'ggg', 2, 'pass', NULL),
(7, 'abed', 'mahfouz', 'info@amctag.com', NULL, 'elnibieh', 2, '123456', NULL),
(8, 'abed', 'gr', 'info@anctag.com', NULL, 'gjy', 2, 'dhhgf', NULL),
(9, 'Ahmed', 'Mustafa', 'ttt@yyy.com', NULL, 'ccff', 2, '1234', 'person_1784_9.jpg'),
(10, 'hadi', 'hadi', 'hadi@amctag.com', NULL, 'al hadi street ', 2, '1234', 'person_8467_10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentsonitems`
--
ALTER TABLE `commentsonitems`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `commentsonmaintenance`
--
ALTER TABLE `commentsonmaintenance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `commentsonposts`
--
ALTER TABLE `commentsonposts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `itemdetails`
--
ALTER TABLE `itemdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemimages`
--
ALTER TABLE `itemimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemscolor`
--
ALTER TABLE `itemscolor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_reviews`
--
ALTER TABLE `item_reviews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`orderItemID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `commentsonitems`
--
ALTER TABLE `commentsonitems`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `commentsonmaintenance`
--
ALTER TABLE `commentsonmaintenance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `commentsonposts`
--
ALTER TABLE `commentsonposts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `itemdetails`
--
ALTER TABLE `itemdetails`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `itemimages`
--
ALTER TABLE `itemimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `itemscolor`
--
ALTER TABLE `itemscolor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `item_reviews`
--
ALTER TABLE `item_reviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `orderItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
