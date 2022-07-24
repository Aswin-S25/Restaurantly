-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 06:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Martina Underwood', 'zumyreh@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(3, 'Stone Wilcox', 'gyjeh@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(5, 'aswin', 'aswinsaswin25@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(12, 'admin', 'admin@gmail.com', 'd4395a5856617fa4afe8c5cd2eed3912'),
(13, 'Administrator', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `featured`, `active`) VALUES
(1, 'Starters', 'Yes', 'Yes'),
(2, 'Salads', 'Yes', 'Yes'),
(3, 'Specialty', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chef`
--

CREATE TABLE `tbl_chef` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_chef`
--

INSERT INTO `tbl_chef` (`id`, `fullname`, `image_name`, `position`, `active`) VALUES
(1, 'Walter White', 'Food-Name-8817.jpg', 'Master chef', 'Yes'),
(2, 'Sarah Jhonson', 'Food-Name-9127.jpg', 'Patissier', 'Yes'),
(3, 'William Anderson', 'Food-Name-5480.jpg', 'Cook', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(1, 'Lobster Bisque', 'Lorem, deren, trataro, filede, nerada', '5.95', 'Food-Name-8696.jpg', 1, 'Yes', 'Yes'),
(2, 'Mozzarella Stick', 'Lorem, deren, trataro, filede, nerada', '4.95', 'Food-Name-9809.jpg', 1, 'Yes', 'Yes'),
(3, 'Caesar selections', 'Lorem, deren, trataro, filede, nerada', '8.95', 'Food-Name-3372.jpg', 2, 'Yes', 'Yes'),
(4, 'Greek salad', 'Fresh spinach, crisp romaine, tomatoes, and Greek olives', '9.95', 'Food-Name-4577.jpg', 2, 'Yes', 'Yes'),
(5, 'Bread Barrel', 'Lorem, deren, tratoro, filede, nerada', '6.95', 'Food-Name-2237.jpg', 3, 'Yes', 'Yes'),
(7, 'puttu', 'best kerala food', '5.65', 'Food-Name-1874.jpg', 3, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `image_name`, `active`) VALUES
(1, 'Food-Name-713.jpg', 'Yes'),
(2, 'Food-Name-2329.jpg', 'Yes'),
(3, 'Food-Name-8900.jpg', 'Yes'),
(4, 'Food-Name-9277.jpg', 'Yes'),
(5, 'Food-Name-8609.jpg', 'Yes'),
(6, 'Food-Name-8918.jpg', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(60) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(1, 'Lobster Bisque', '5.95', 3, '17.85', '2022-06-29 11:26:52', 'Delivered', 'Aswin S', '7736118924', 'admin@gmail.com', 'aasd'),
(2, 'Lobster Bisque', '5.95', 2, '11.90', '2022-06-29 11:28:03', 'Cancelled', 'ananthu', '9495732889', 'ananthu@gmail.com', 'asds'),
(3, 'Caesar selections', '8.95', 1, '8.95', '2022-06-29 11:29:44', 'Ordered', 'asdf', '782498554152', 'aswinsaswin25@gmail.com', 'sd'),
(4, 'Mozzarella Stick', '4.95', 2, '9.90', '2022-06-29 11:32:05', 'Delivered', 'a', '87787878', 'asdasdf@gmail.com', 'f'),
(5, 'Lobster Bisque', '5.95', 2, '11.90', '2022-07-22 08:36:52', 'Delivered', 'deepak', '542132132132', 'adsfsd@gmail.com', 'sakdjf kjsdhfkjshfkj '),
(6, 'Lobster Bisque', '5.95', 2, '11.90', '2022-07-22 05:36:48', 'Delivered', 'Aswin S', '7736118924', 'admin@gmail.com', 'opal homes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_chef`
--
ALTER TABLE `tbl_chef`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_chef`
--
ALTER TABLE `tbl_chef`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
