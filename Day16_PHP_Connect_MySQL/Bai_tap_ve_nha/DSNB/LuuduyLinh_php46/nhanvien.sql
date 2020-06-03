-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 06:09 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhanvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien_tb`
--

CREATE TABLE `nhanvien_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desciption` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `gender` bit(1) NOT NULL,
  `birtday` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien_tb`
--

INSERT INTO `nhanvien_tb` (`id`, `name`, `desciption`, `salary`, `gender`, `birtday`, `created_at`) VALUES
(1, 'linh1', 'qeqwe1', 12341, b'0', '2019-09-18 00:00:00', '2020-06-02 06:16:05'),
(14, 'linh', 'dev', 123, b'1', '1998-09-19 00:00:00', '2020-06-02 06:35:45'),
(15, 'linh', '123', 123, b'1', '1998-09-19 00:00:00', '2020-06-02 07:39:08'),
(16, 'linh', '123', 123, b'1', '1998-09-19 00:00:00', '2020-06-02 07:39:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nhanvien_tb`
--
ALTER TABLE `nhanvien_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nhanvien_tb`
--
ALTER TABLE `nhanvien_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
