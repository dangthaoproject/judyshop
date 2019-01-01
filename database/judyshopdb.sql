-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 05:40 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `judyshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Vòng Tay'),
(2, 'Dây Chuyền');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image_url` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `rate` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `image_url`, `description`, `category_id`, `price`, `rate`) VALUES
(1, 'Trái Tim Khiêu Vũ', 'upload/products/vong_tay_1.gif', 'Một chiếc vòng tinh sảo với trái tim lấp lánh tình yêu!', 1, 800000, 4),
(2, 'Lắc tay ', 'upload/products/vong_tay_2.png', 'Với những màu sắc sang trọng lắp lánh sẽ khiến tay bạn thật nổi bật!', 1, 100000, 5),
(3, 'Vòng tay Quả Đào', 'upload/products/vong_tay_3.png', 'Với những cánh hoa đào hồng phấn làm từ Swarovski Thạch Anh sẽ tôn lên vẻ nữ tính của bạn', 1, 900000, 4),
(4, 'Dây chuyền tinh tú', 'upload/products/day_chuyen_1.gif', 'Sợi dây chuyền charm sẽ là một món quà đáng yêu và tinh tế mà bạn không mất quá nhiều thời gian để dành tặng cho người thân và gia đình bạn.', 2, 800000, 5),
(5, 'Dây chuyền trái tim', 'upload/products/day_chuyen_2.gif', 'Sợi dây chuyền charm sẽ là một món quà đáng yêu và tinh tế mà bạn không mất quá nhiều thời gian để dành tặng cho người thân và gia đình bạn.', 2, 1200000, 4),
(6, 'Dây chuyền tinh anh', 'upload/products/day_chuyen_3.gif', 'Sợi dây chuyền charm sẽ là một món quà đáng yêu và tinh tế mà bạn không mất quá nhiều thời gian để dành tặng cho người thân và gia đình bạn.', 2, 1200000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` int(11) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `number_phone` int(11) NOT NULL,
  `avatar_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
