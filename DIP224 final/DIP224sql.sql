-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 07:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dip224`
--

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE `approval` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approval`
--

INSERT INTO `approval` (`id`, `username`, `email`, `mobile`, `company`, `password`) VALUES
(7, 'Ryan', 'ryan@gmail.com', '012345678', 'Three SDN BHD', '321'),
(10, 'Tan Nguyen Jin', 'Jin@gmail.com', '0197793647', 'ONE.co', '321123'),
(11, 'Person', 'person@gmail.com', '0123456789', 'Tree.CO', 'tree123'),
(12, 'Rish', 'rish@gmail.com', '012348765', 'Tree.CO', 'rish123');

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE `merchant` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`id`, `username`, `email`, `mobile`, `company`, `password`) VALUES
(19, 'vish', 'vish@gmail.com', '1234567890', 'ONE', '123'),
(20, 'Vishva', 'Vishva21@gmail.com', '29494', 'TWO SDN ', '123'),
(21, 'Rish', 'rish@gmail.com', '012348765', 'Tree.CO', 'rish123'),
(22, 'Person', 'person@gmail.com', '0123456789', 'Tree.CO', 'tree123');

-- --------------------------------------------------------

--
-- Table structure for table `ministry`
--

CREATE TABLE `ministry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ministry`
--

INSERT INTO `ministry` (`id`, `name`, `email`, `password`) VALUES
(2, 'Jovian', 'jovian@gmail.com', 'jovian123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `description` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `company`, `image`) VALUES
(14, 'LANGKAWI', '999.00', 'Trip to langkawi, 5 day 4 night', 'KAWI.CO', 'images/food.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zipCode` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `cnumber` varchar(200) NOT NULL,
  `expiremonth` varchar(200) NOT NULL,
  `expireyear` varchar(200) NOT NULL,
  `cvv` varchar(200) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `productPrice` decimal(10,2) NOT NULL,
  `productCompany` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`fullname`, `email`, `address`, `city`, `state`, `zipCode`, `cname`, `cnumber`, `expiremonth`, `expireyear`, `cvv`, `productName`, `productPrice`, `productCompany`) VALUES
('persona', 'persona@gmail.com', 'ampang jaya 2', 'ampang', 'Selangro', '68100', 'Persona', '11112345678', 'June', '2024', '087', 'Bottle', '34.21', 'TWO'),
('Lionel Messi', 'Messi@gmail.com', '80,Jalan Pasir Muda', 'Kepong', 'Kuala Lumpur', '52100', 'Lionel Messi', '8888-9999-0000-7777', 'July', '2025', '023', 'Cosmetics', '122.34', 'Cookie.co'),
('Cristiano Ronaldo', 'ronaldo@gmail.com', '2,Taman Padang pasir dua', 'Muar', 'Johor', '450000', 'Cristiano Ronaldo', '7777-7777-7777-7777', 'August', '2030', '026', 'Giftbox', '4.99', 'GIFTS.Co'),
('Vishva Baskaran', 'vishva@gmail.com', '88, jalan 14, Selayang jaya', 'Kepong', 'Kuala Lumpur', '52100', 'VISHVA BASKARAN', '3456-4567-2344-5677', 'August', '2029', '054', 'Bottle', '34.21', 'TWO'),
('Neymar', 'neymar@gmail.com', 'Jalan Brazil', 'espan', 'Barca', '11111', 'Neymar JR', '4444-555-5666-7778', 'January', '2028', '056', 'Lipstick', '55.99', 'JSON'),
('Chong', 'chong@gmail.com', '12, Jalan ipoh', 'IPOH', 'Selangor', '345695', 'CHONG', '2244-334-5566-6677', 'september', '2026', '054', 'LANGKAWI', '999.99', 'KAWI.CO');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `Rate` int(5) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phonenumber` varchar(20) NOT NULL,
  `Feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`Rate`, `Fullname`, `Email`, `Phonenumber`, `Feedback`) VALUES
(0, 'Cristiano Ronaldo', 'ronaldo@gmail.com', '0177777777', 'Thank youu, best website ever to visit'),
(0, 'Cristiano Ronaldo', 'ronaldo@gmail.com', '0177777777', 'Thank youu, best website ever to visit'),
(0, 'Vishva Baskaran', 'vishva@gmail.com', '0185892883', 'Better design, more speed, more animation, more multimedia'),
(0, 'Vishva Baskaran', 'vishva@gmail.com', '0185892883', 'Better design, more speed, more animation, more multimedia'),
(0, 'Vishva Baskaran', 'vishva@gmail.com', '0185892883', 'Better design, more speed, more animation, more multimedia'),
(0, 'Vishva Baskaran', 'vishva@gmail.com', '0185892883', 'Better design, more speed, more animation, more multimedia'),
(0, 'Neymar', 'neymar@gmail.com', '01234567876', 'Good design, need more features..a...s..dfknr'),
(3, 'Chong', 'chong@gmail.com', '01239876543', 'Need better features'),
(3, 'Chong', 'chong@gmail.com', '01239876543', 'Need better features');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministry`
--
ALTER TABLE `ministry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approval`
--
ALTER TABLE `approval`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ministry`
--
ALTER TABLE `ministry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
