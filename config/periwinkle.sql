-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 01:58 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `periwinkle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(25) NOT NULL,
  `admin_password` varchar(8) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(10) NOT NULL,
  `cust_name` varchar(40) CHARACTER SET latin1 NOT NULL,
  `cust_email_address` varchar(40) CHARACTER SET latin1 NOT NULL,
  `cust_address1` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cust_address2` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cust_postcode` varchar(10) CHARACTER SET latin1 NOT NULL,
  `cust_phone_number` varchar(20) CHARACTER SET latin1 NOT NULL,
  `cust_username` varchar(15) CHARACTER SET latin1 NOT NULL,
  `cust_password` varchar(15) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email_address`, `cust_address1`, `cust_address2`, `cust_postcode`, `cust_phone_number`, `cust_username`, `cust_password`) VALUES
(1, 'Nornasuha binti Zakaria', 'nasuhazakaria296@gmail.com', 'No 1525 Kg Air Chana', 'Ayer Lanas', '17700', '011-60909608', 'nasuha21', 'nasuha2121'),
(19, 'Nana Nasuha', 'suha.cool96@gmail.com', 'Bandar Mahkota Cheras', 'Cheras', '43200', '+60909608', 'Nana', 'nana123'),
(20, 'syabila', 'syabila@gmail.com', 'Ampang', 'KL', '52100', '0112090887', 'syabila', 'syabila123'),
(21, 'Adam Hafiz', 'adamhafiz@gmail.com', 'Bandar Mahkota Cheras', 'Cheras', '43200', '909608', 'Adam', 'adam123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_quantity` int(255) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cust_id`, `product_id`, `order_quantity`, `order_status`, `order_date`) VALUES
(7, 19, 2, 1, 'paid', '2021-11-16'),
(9, 20, 8, 1, 'paid', '2021-11-16'),
(10, 20, 9, 1, 'paid', '2021-11-17'),
(11, 20, 11, 1, 'cart', '2021-11-17'),
(12, 19, 3, 1, 'cart', '2021-11-17'),
(13, 19, 2, 1, 'cart', '2021-11-17'),
(14, 21, 2, 2, 'cart', '2021-11-17'),
(15, 21, 3, 1, 'cart', '2021-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `product_category` varchar(20) NOT NULL,
  `product_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `product_code` varchar(10) CHARACTER SET latin1 NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_image` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_category`, `product_name`, `product_code`, `product_price`, `product_image`) VALUES
(1, 'Slingbag', 'W Chain', 'W1', '24.99', 'slingbag 8.jpg'),
(2, 'Slingbag', 'Mini Hermica', 'M3', '19.99', 'slingbag 5.jpg'),
(3, 'Slingbag', 'Petti Slingbag', 'P5', '20.50', 'slingbag 1.jpg'),
(4, 'Slingbag', 'Christal Kylie', 'C7', '14.99', 'slingbag 4.jpg'),
(5, 'Slingbag', 'Leona Bag', 'L2', '19.99', 'leona slingbag 3.jpg'),
(6, 'Slingbag', 'Delirani chain', 'D4', '20.99', 'chain slingbag 2.jpg'),
(7, 'Slingbag', 'Lynet pin', 'L6', '14.99', 'slingbag 6.jpg'),
(8, 'Slingbag', 'Mini Trigel', 'M8', '24.99', 'slingbag 7.jpg'),
(9, 'Tote bags', 'Irene A', 'IA01', '34.99', 'tote1.jpg'),
(10, 'Tote bags', 'Teddy C', 'TC01', '30.99', 'tote3.jpg'),
(11, 'Tote bags', 'Mia Bag', 'MB01', '30.50', 'feature2.jpg'),
(12, 'Tote bags', 'Joy Clutch', 'JC01', '24.99', 'feature4.jpg'),
(13, 'Tote bags', 'Sana B', 'SB01', '20.99', 'tote2.jpg'),
(14, 'Tote bags', 'White Safarina', 'WS01', '40.99', 'tote4.jpg'),
(15, 'Tote bags', 'Hana D', 'HD01', '30.99', 'feature3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_name` (`product_name`),
  ADD UNIQUE KEY `Code` (`product_code`),
  ADD UNIQUE KEY `product_name_2` (`product_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
