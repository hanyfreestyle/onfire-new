-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 12:21 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onfire_new`
--

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `price`, `sale_price`, `qty_left`, `qty_max`, `unit`, `photo`, `photo_thum_1`, `is_active`, `is_archived`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, NULL, 105.00, NULL, NULL, 10, NULL, '', '', 1, 0, '2023-10-08 08:24:40', '2023-10-08 08:27:52', NULL),
(3, NULL, 400.00, NULL, NULL, 10, NULL, NULL, NULL, 1, 0, '2023-10-08 09:08:41', '2023-10-08 09:08:41', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
