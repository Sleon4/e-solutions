-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Feb 20, 2024 at 10:08 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lion_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `platform` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interfaces`
--

CREATE TABLE `interfaces` (
  `id` int NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `device` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `platforms`
--

CREATE TABLE `platforms` (
  `id` int NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `read_test_user`
-- (See below for the actual view)
--
CREATE TABLE `read_test_user` (
`id` int
,`full_name` varchar(150)
,`email` varchar(100)
,`celular` bigint
,`name_folder` varchar(60)
,`date` datetime
,`status` int
);

-- --------------------------------------------------------

--
-- Table structure for table `test_user`
--

CREATE TABLE `test_user` (
  `id` int NOT NULL,
  `full_name` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `celular` bigint NOT NULL,
  `name_folder` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `date` datetime NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `test_user`
--

INSERT INTO `test_user` (`id`, `full_name`, `email`, `celular`, `name_folder`, `date`, `status`) VALUES
(1, 'Sergio Leon', 'sleon@dev.com', 3154498121, 'SleonApp', '2024-02-20 17:00:54', 0),
(2, 'Sergio Leon', 'sleon@dev.com', 3154498121, 'SleonApp', '2024-02-20 17:01:11', 1),
(3, 'Sergio Leon', 'sleon@dev.com', 3154498121, 'SleonApp', '2024-02-20 17:01:16', 1),
(4, 'Sergio Leon', 'sleon@dev.com', 3154498121, 'SleonApp', '2024-02-20 17:01:18', 0);

-- --------------------------------------------------------

--
-- Structure for view `read_test_user`
--
DROP TABLE IF EXISTS `read_test_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `read_test_user`  AS SELECT `usr`.`id` AS `id`, `usr`.`full_name` AS `full_name`, `usr`.`email` AS `email`, `usr`.`celular` AS `celular`, `usr`.`name_folder` AS `name_folder`, `usr`.`date` AS `date`, `usr`.`status` AS `status` FROM `test_user` AS `usr` WHERE (`usr`.`status` <> 0) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interfaces`
--
ALTER TABLE `interfaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_user`
--
ALTER TABLE `test_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interfaces`
--
ALTER TABLE `interfaces`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `platforms`
--
ALTER TABLE `platforms`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_user`
--
ALTER TABLE `test_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
