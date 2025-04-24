-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2025 at 07:51 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lanka_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `sorder`
--

DROP TABLE IF EXISTS `sorder`;
CREATE TABLE IF NOT EXISTS `sorder` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sorder`
--

INSERT INTO `sorder` (`id`, `customer_name`, `email`, `address`, `phone`, `product_name`, `quantity`) VALUES
(1, 'Nilaksha Mihiran', 'mihirannilaksha@gmail.com', 'bg', '07818547724', 'Chocolate Ice Cream', 1),
(2, 'Nilaksha Mihirangf', 'mihirannilaksha@gmail.com', 'srikalum,weligama', '0781854772', 'Vanilla Ice Cream', 1),
(3, 'Nilaksha Mihirangf', 'mihirannilaksha@gmail.com', 'srikalum,weligama', '0781854772', 'Chocolate Ice Cream', 1),
(4, 'Nilaksha Mihirangf', 'mihirannilaksha@gmail.com', 'srikalum,weligama', '0781854772', 'Strawberry Ice Cream', 9),
(5, 'Nilaksha Mihirangf', 'mihirannilaksha@gmail.com', 'srikalum,weligama', '0781854772', 'Blueberry Ice Cream', 1),
(6, 'Nilaksha Mihirangf', 'mihirannilaksha@gmail.com', 'srikalum,weligama', '0781854772', 'Coffee Ice Cream', 1),
(7, 'Nilaksha Mihirangf', 'mihirannilaksha@gmail.com', 'srikalum,weligama', '0781854772', 'Cookies Ice Cream', 1),
(8, 'Nilaksha sandarurg', 'tsmknsmmathsmax@gmail.com', 'srikalum,weligama', '0781854772', 'Coffee Ice Cream', 1),
(9, 'nika', 'trr@gmail.com', 're', '0781745442', 'Vanilla Ice Cream', 1),
(10, 'dk', 'trr@gmail.com', 'srikalum,weligama', '0781745442', 'Coffee Ice Cream', 1),
(11, 'dk', 'trr@gmail.com', 'srikalum,weligama', '0781745442', 'Strawberry Ice Cream', 1),
(12, 'dk', 'trr@gmail.com', 'srikalum,weligama', '0781745442', 'Blueberry Ice Cream', 1),
(13, 'dk', 'trr@gmail.com', 'srikalum,weligama', '0781745442', 'Coffee Ice Cream', 1),
(14, 'Nilaksha Mihiran', 'mihirannilaksha@gmail.com', 'srikalum,weligama', '0781854772', 'Chocolate Ice Cream', 1),
(15, 'Nilaksha Mihiran', 'mihirannilaksha@gmail.com', 'srikalum,weligama', '0781854772', 'Strawberry Ice Cream', 1),
(16, 'Nilaksha Mihiran', 'mihirannilaksha@gmail.com', 'srikalum,weligama', '0781854772', 'Blueberry Ice Cream', 1),
(17, 'dinuka', 'hpprt@gmail.com', 'srikalum,weligama', '0781745442', 'Strawberry Ice Cream', 1),
(18, 'dinuka', 'hpprt@gmail.com', 'srikalum,weligama', '0781745442', 'Blueberry Ice Cream', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
