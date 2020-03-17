-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2019 at 06:42 PM
-- Server version: 10.3.15-MariaDB-1
-- PHP Version: 7.0.33-10+0~20190807.18+debian9~1.gbp5452d8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) NOT NULL,
  `first_name` varchar(60) DEFAULT NULL,
  `sur_name` varchar(70) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(70) DEFAULT NULL,
  `post_code` varchar(50) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `sur_name`, `address`, `country`, `post_code`, `phone`, `email`, `subject`, `message`) VALUES
(1, 'Viktor', 'Petrov', '151 Rochester AvenueU', NULL, 'TW13 4EH', '07411843040', 'viktor.petrovvt@gmail.com', 'Subject', 'The data illustrates a country which became more bigoted and more polarised against the backdrop of last year’s incendiary election campaign and the increase in inflammatory rhetoric by the far-right president, Jair Bolsonaro, and his supporters, specialists said.'),
(2, 'Viktor', 'Petrov', '151 Rochester AvenueU', NULL, 'TW13 4EH', '07411843040', 'viktor.petrovvt@gmail.com', 'Subject', 'The data illustrates a country which became more bigoted and more polarised against the backdrop of last year’s incendiary election campaign and the increase in inflammatory rhetoric by the far-right president, Jair Bolsonaro, and his supporters, specialists said.'),
(3, 'Viktor', 'Petrov', '151 Rochester AvenueU', NULL, 'TW13 4EH', '07411843040', 'viktor.petrovvt@gmail.com', 'Subject', 'The data illustrates a country which became more bigoted and more polarised against the backdrop of last year’s incendiary election campaign and the increase in inflammatory rhetoric by the far-right president, Jair Bolsonaro, and his supporters, specialists said.'),
(4, 'Viktor', 'Petrov', '151 Rochester AvenueU', NULL, 'TW13 4EH', '07411843040', 'viktor.petrovvt@gmail.com', 'Subject', 'The data illustrates a country which became more bigoted and more polarised against the backdrop of last year’s incendiary election campaign and the increase in inflammatory rhetoric by the far-right president, Jair Bolsonaro, and his supporters, specialists said.'),
(5, 'Viktor', 'Petrov', '151 Rochester AvenueU', NULL, 'TW13 4EH', '07411843040', 'viktor.petrovvt@gmail.com', 'Subject', 'The data illustrates a country which became more bigoted and more polarised against the backdrop of last year’s incendiary election campaign and the increase in inflammatory rhetoric by the far-right president, Jair Bolsonaro, and his supporters, specialists said.'),
(6, 'Petar', 'Petrov', '151 Rochester Avenue', NULL, 'TW13 4EH', '07411843040', 'viktor.petrovvt@gmail.com', 'Subject', 'The data illustrates a country which became more bigoted and more polarised against the backdrop of last year’s incendiary election campaign and the increase in inflammatory rhetoric by the far-right president, Jair Bolsonaro, and his supporters, specialists said.'),
(7, 'Zamunda', 'Zamunda', 'Zambiq 23', NULL, 'TW13 4EH', '+657578999', 'plamen@mail.com', 'Plamen', 'The data illustrates a country which became more bigoted and more polarised against the backdrop of last year’s incendiary election campaign and the increase in inflammatory rhetoric by the far-right president, Jair Bolsonaro, and his supporters, specialists said.'),
(8, 'Damqn', 'Damqnow', 'Damqnixa 23', NULL, 'TW13 4EH', '07411843040', 'del@gmail.com', 'Subject', 'The data illustrates a country which became more bigoted and more polarised against the backdrop of last year’s incendiary election campaign and the increase.'),
(9, 'Simeon ', 'Simeonov', '151 Rochester Avenue', NULL, 'TW13 4EH', '07411843040', 'viktor.petrovvt@gmail.com', 'Subject', 'The data illustrates a country which became more bigoted and more polarised against the backdrop of last year’s incendiary election campaign and the increase'),
(10, 'Negowan', 'negowan', 'address 22', NULL, 'TW13 4EH', '07411843040', 'viktor.petrovvt@gmail.com', 'Subject', 'The data illustrates a country which became more bigoted and more polarised against the backdrop of last year’s '),
(11, '', '', '', NULL, '', '', '', '', ''),
(12, '', '', '', NULL, '', '', '', '', ''),
(13, 'Viktor', 'Petrov', '151 Rochester Avenue', NULL, 'TW13 4EH', '07411843040', 'viktor.petrovvt@gmail.com', 'Subject', 'https://bootstrapmade.com/sailor-free-bootstrap-theme/'),
(14, '', '', '', NULL, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
