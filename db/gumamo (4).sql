-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 07:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gumamo`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cust_name` varchar(69) NOT NULL,
  `cust_locat` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` date NOT NULL,
  `approve` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cust_name`, `cust_locat`, `phone`, `mail`, `quantity`, `date`, `approve`) VALUES
(1, 'NYIRAMUGISHA SOLINA', 'RWANDA,NYAGATARE', '0784823631', 'nyiramugishasoline1@gmail.com', 100, '2007-02-23', 'Pending'),
(2, 'solina', 'BUTARE', '+250784823631', 'soli@gmail.com', 233, '2015-02-23', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `output_stock`
--

CREATE TABLE `output_stock` (
  `id` int(11) NOT NULL,
  `p_id` varchar(10) NOT NULL,
  `t_mlitre` varchar(10) NOT NULL,
  `douzen` int(10) NOT NULL,
  `rest` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `output_stock`
--

INSERT INTO `output_stock` (`id`, `p_id`, `t_mlitre`, `douzen`, `rest`, `username`, `date`) VALUES
(1, '2', '250000', 0, '1', 'Claudine NYIRANDIKUBWAYO', '2015-02-23'),
(2, '2', '250000', 0, '1', 'Claudine NYIRANDIKUBWAYO', '2015-02-23'),
(3, '2', '250000', 0, '1', 'Claudine NYIRANDIKUBWAYO', '2015-02-23'),
(4, '1', '250000', 19, '1', 'nclaude', '2015-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `pr_id` int(11) NOT NULL,
  `sugar` varchar(10) NOT NULL,
  `tea` varchar(10) NOT NULL,
  `foodsplit` varchar(10) NOT NULL,
  `tangawizi` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `store_user` varchar(40) NOT NULL,
  `production_user` varchar(100) NOT NULL,
  `output` varchar(10) NOT NULL,
  `received` varchar(50) NOT NULL,
  `received_date` date NOT NULL,
  `parking` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`pr_id`, `sugar`, `tea`, `foodsplit`, `tangawizi`, `date`, `store_user`, `production_user`, `output`, `received`, `received_date`, `parking`) VALUES
(1, '20kg', '2kg', '150mg', '15kg', '2015-02-23', 'solina', 'nclaude', '250000', 'nclaude', '2015-02-23', 'done'),
(2, '20kg', '2kg', '150mg', '15kg', '2015-02-23', 'solina', 'nyiracla5@gmail.com', '250000', 'Claudine NYIRANDIKUBWAYO', '2015-02-23', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `raw_mateial`
--

CREATE TABLE `raw_mateial` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(30) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `stock` int(11) NOT NULL,
  `r_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `raw_mateial`
--

INSERT INTO `raw_mateial` (`r_id`, `r_name`, `quantity`, `stock`, `r_type`) VALUES
(1, 'sugar', '20', 200, 'Drink'),
(2, 'tea', '2', 20, 'Drink'),
(3, 'food split', '150', 1500, 'Drink'),
(4, 'tangawizi', '15', 150, 'Drink');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Username` varchar(60) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `Phone` varchar(13) NOT NULL,
  `profile` longblob NOT NULL,
  `Type` varchar(10) NOT NULL,
  `responsibility` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Username`, `Password`, `e_mail`, `Phone`, `profile`, `Type`, `responsibility`) VALUES
(1, 'Jean Claude', 'jclaude', '123', 'ncaude@gmail.com', '+250782679199', 0x757365725f696d2e6a7067, 'User', ''),
(2, 'nclaude', 'nclaude', 'nclaude', 'nclaude650@gmail.com', '+250732679199', 0x67312e6a7067, 'User', 'Production'),
(3, 'kagabo', 'kagabo', '123', 'nclaude@gmail.com', '+256704736712', 0x6d7367312e706e67, 'Admin', ''),
(5, 'Claudine NYIRANDIKUBWAYO', 'nyiracla5@gmail.com', '123', 'nyiracla5@gmail.com', '0782604006', 0x67322e6a7067, 'User', 'Production'),
(6, 'solina', 'solina', '123', 'soli@gmail.com', '+250784823631', 0x757365725f696d2e6a7067, 'User', 'Stock');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `output_stock`
--
ALTER TABLE `output_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `raw_mateial`
--
ALTER TABLE `raw_mateial`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `output_stock`
--
ALTER TABLE `output_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `raw_mateial`
--
ALTER TABLE `raw_mateial`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
