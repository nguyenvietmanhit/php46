-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2020 at 04:48 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bt1`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `salary` int(10) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `description`, `gender`, `salary`, `birthday`, `created_at`) VALUES
(1, 'manh', 'des manh', 1, 20000, '2019-11-12', '2019-11-03 15:41:49'),
(2, 'nvmanh', 'des nvmanh', 0, 10000, '2018-12-12', '2019-11-03 15:42:12'),
(3, 'Tráº§n KhÃ¡nh Duy', 'abc', 0, 100000, '0000-00-00', '2020-06-01 03:36:06'),
(4, 'duy', '12sdas', 0, 100000, '2020-01-01', '2020-06-01 03:40:16'),
(5, 'duy', '12sdas', 0, 100000, '2020-01-01', '2020-06-01 04:11:36'),
(6, 'duy', '12sdas', 0, 100000, '2020-01-01', '2020-06-01 04:22:28'),
(7, 'duy', 'dasdas', 1, 100000, '2020-01-01', '2020-06-02 02:15:10'),
(8, 'duy', 'dasdas', 1, 100000, '2020-01-01', '2020-06-02 04:27:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
