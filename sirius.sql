-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2020 at 03:54 AM
-- Server version: 10.3.18-MariaDB-0+deb10u1
-- PHP Version: 7.3.11-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirius`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `telephone` varchar(60) NOT NULL,
  `town` varchar(60) NOT NULL,
  `oblast` varchar(70) NOT NULL,
  `bank` tinyint(1) NOT NULL,
  `cache` tinyint(1) NOT NULL,
  `total` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `email`, `telephone`, `town`, `oblast`, `bank`, `cache`, `total`) VALUES
(1, 'Viktor', 'Petrov', 'viktor.petrovvt@gmail.com', '42314', 'fewf', 'ewfew', 1, 0, '234.00'),
(2, 'Blagoi', 'Dimitrov', 'blabla@gmail.com', '008308', '3w2qrd23q', 'dwqfd', 0, 1, '474.00'),
(3, 'Viktor', 'Stoy', 'Maleev@gmail.com', '890800', 'wqdqwd', 'wqfdewqf', 1, 0, '624.00'),
(4, 'Viktor', 'Stoy', 'Maleev@gmail.com', '890800', 'wqdqwd', 'wqfdewqf', 1, 0, '624.00'),
(5, 'Viktor', 'Stoy', 'Maleev@gmail.com', '890800', 'wqdqwd', 'wqfdewqf', 1, 0, '624.00'),
(6, 'telenor', 'Leon', 'Marinov@marin', '7979090', 'qwdqwd', 'fdewfd', 1, 0, '360.00'),
(7, 'telenor', 'Leon', 'Marinov@marin', '7979090', 'qwdqwd', 'fdewfd', 1, 0, '360.00'),
(8, 'telenor', 'Leon', 'Marinov@marin', '7979090', 'qwdqwd', 'fdewfd', 1, 0, '360.00'),
(9, 'telenor', 'Leon', 'Marinov@marin', '7979090', 'qwdqwd', 'fdewfd', 1, 0, '360.00'),
(10, 'Damqn', 'Damqnov', 'damqn@mail.com', '4132423452', 'fddasd', 'qwdqwfd', 1, 0, '282.00'),
(11, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '0.00'),
(12, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '0.00'),
(13, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '210.00'),
(14, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '210.00'),
(15, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '210.00'),
(16, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 0, 1, '84.00'),
(17, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 0, 1, '84.00'),
(18, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 0, 1, '84.00'),
(19, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 0, 1, '84.00'),
(20, 'Viktor', 'Petrov', 'rov@gmail.com', '', 'Feltham', '', 0, 0, '84.00'),
(21, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(22, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(23, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(24, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(25, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(26, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(27, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(28, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(29, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(30, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(31, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(32, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(33, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(34, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(35, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(36, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(37, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(38, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(39, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(40, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(41, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(42, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(43, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '84.00'),
(44, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '134.00'),
(45, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '88.00'),
(46, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '212.00'),
(47, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '212.00'),
(48, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '212.00'),
(49, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '212.00'),
(50, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '212.00'),
(51, 'Viktor', 'Petrov', 'victor.data.host@gmail.com', '+35963145388', 'Feltham', 'Tarnovo', 1, 0, '212.00');

-- --------------------------------------------------------

--
-- Table structure for table `order_sirius`
--

CREATE TABLE `order_sirius` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `sirius_id` int(11) NOT NULL,
  `quantity` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_sirius`
--

INSERT INTO `order_sirius` (`id`, `order_id`, `sirius_id`, `quantity`) VALUES
(1, 1, 3, 3),
(2, 1, 2, 0),
(3, 1, 5, 2),
(4, 1, 4, 1),
(5, 9, 3, 2),
(6, 9, 0, 2),
(7, 9, 2, 2),
(8, 9, 1, 2),
(9, 10, 3, 3),
(10, 10, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `product-quantity` int(11) NOT NULL,
  `short_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `active` tinyint(4) NOT NULL,
  `styleh` varchar(250) NOT NULL,
  `stylep` varchar(250) NOT NULL,
  `product_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `product-quantity`, `short_description`, `description`, `active`, `styleh`, `stylep`, `product_type`) VALUES
(0, 'СИРИУС - Д CLASIC', 'images/blog/sirius-1.png', '46.00', 1, 'Имуностимулатор. Подобрява кръвообращението и перисталтиката. Поддържа висок енергиен тонус на организма.\r\n\r\n\r\n', 'Може да се приема при първоначален неинтензивен прием. Имуностимулатор. Подобрява кръвообращението и перисталтиката. Поддържа висок енергиен тонус на организма. Препоръчителен при поддържащ прием след приключване на период на интензивен прием продукта Спорт.', 1, 'color:#d91311; text-align:center;font-weight:bold;', 'color: #d91311; text-align:center;', 'classic'),
(1, 'СИРИУС - Д LIGHT', 'images/blog/sirius-light-2.png', '42.00', 1, 'Препоръчителен при поддържащ прием   с умерена интензивност. Подходящ за потребители с чувствителен стомах и деца <br>', 'Може да се приема при първоначален неинтензивен прием. Препоръчителен при поддържащ прием след приключване на интензивен прием на продукта Интенс. Подходящ за потребители с чувствителен стомах и деца. Подобрява кръвообращението и перисталтиката. Поддържа висок енергиен тонус на организма.', 0, 'color:#f45200; text-align:center;font-weight:bold;', 'color:#f45200; text-align:center;', 'light'),
(2, 'СИРИУС - Д SPORT', 'images/blog/sirius-sport-3.png', '44.00', 1, 'Имуностимулатор. Подходящ както за активни спортисти и хора подложени на тежки физически натоварвяния и травми', 'Продукт за стартов прием с високо съдържание на основната субстанция. Имуностимулатор. Подобрява кръвообращението и перисталтиката. Подпомага бързото общо възстановяване на организма. Подходящ както за активни спортисти и хора подложени на тежки физически натоварвяния, така и за потребители без стомашни смушения или чувствителност, започващи първоначален интензивен прием на SIRIUS-D. След приключване на интензивния период на прием (30-90 дни), препоръчваме поддържащ прием на SIRIUS-D с продукта Класик.', 0, 'color: #002f8c; text-align:center;font-weight:bold;', 'color:  #002f8c; text-align:center;', 'sport'),
(3, 'СИРИУС - Д INTENSE', 'images/blog/sirius-intense-4.png', '48.00', 1, 'За потребители със силно изтощен организъм в следствие на тежки заболявания или прекарано оперативно лечение', 'Продукт за стартов прием с високо съдържание на основната субстанция, подходящ за потребители, започващи първоначален интензивен прием на SIRIUS-D, имащи чувствителен стомах или стомашни смущения и деца. Подобрява кръвообращението и перисталтиката. Подпомага бързото общо възстановяване на организма. Най-добрият вариант SIRIUS-D за потребители със силно изтощен организъм в следствие на тежки заболявания или прекарано оперативно лечение. След приключване на интензивния период на прием (30-90 дни), препоръчваме поддъжащ прием на SIRIUS-D с продукта Лайт.', 0, 'color:#5f0002; text-align:center;font-weight:bold;', 'color:#5f0002; text-align:center;', 'intense');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_sirius`
--
ALTER TABLE `order_sirius`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `order_sirius`
--
ALTER TABLE `order_sirius`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
