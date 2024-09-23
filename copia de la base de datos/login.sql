-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 23, 2024 at 07:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--
CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `login`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ale', 'ale@aale', '$2y$10$oJhkKv1PvjtxfgPHuc/anu707dWIBpwxz0BgtrONsLYF2IYAKTN5i'),
(2, 'aleja', 'a@a', '$2y$10$3GUf6b.IpxdR2w8ggek17uT2e/xRF2qIJt..M3bB982BD3W02a5tO'),
(5, 'alejandra', 'aa@111111', '$2y$10$dLFIgyuXM9N4FivioNcmH.1pVasv3BJIMrFc70HXOU.rlZiZEBXza'),
(11, 'a', 'a@a.com', '$2y$10$hiOqL2tQqKJ0V/4LUSAAauw/4ZaCwaVTkeahA1NaMhb8DLgtJph7e'),
(13, 'felu', 'felu@ejemplo.com', '$2y$10$/p0VP61rKxGPp8LMhffTqelEUxV3VvwVMoHeZodfITtaJmHG9uL1y'),
(14, 'felipe', 'felipe@a.com', '$2y$10$/he0ZfkgEMzwu/AR3ZNtOu3UoslylRWMzDHJU0cGBTeNLieeKZiGe'),
(15, 'usuario', 'usuario@ej.com', '$2y$10$f//wfP/8dZkmnWOJf39LpekXzvjipD0QtP.DD82zHuDJlHEI3XNQa'),
(20, 'Fer', 'fer@a.comm', '$2y$10$hygnaekAu60dfo2cNnjuJeCm9bGtvY.g88R.HnHCU4MDIdjTUmhC.'),
(21, 'noanda', 'a@a.com', '$2y$10$tRrCUQjvdSyz08ly5daju.GVDFGstZYluO.CC9Ot21uUSdUu/S0dq'),
(22, 'sgra', 'sgra@milkyway.com', '$2y$10$1/Sl2RK.rsbFlKBcmFlICO2BpxzVHCYBy7cYHmZ68T6oZ53ho3lju'),
(23, 'anda', 'anda@noanda.com', '$2y$10$U0O1/hkxEYdWZIVRhzVMrONwsmqPA6QsoRxTfUfMDIcaKs/iXlXA2'),
(27, 'e4y8', 'e4y8@e4y8.com', '$2y$10$JqmEZRVsCv9UV.FPikWkj.L7qQmfOFKZUWwRZa5mDEsqyGw521Dee'),
(28, 'pruebaclave', 'prueba@p.com', '$2y$10$tjje3iFJYURUgrcr1yEBtODzWwAEYMzaqxEK5ovQQbOgetUTVq.LS'),
(29, 'nuevo', 'otro@o.com', '$2y$10$98UR4kLrloUoYdWXd.aiqeHxqC3U72hjNJRc9JxZxfREtdwpmMZqC'),
(30, 'vadenuevo', 'va@va.com', '$2y$10$bwbDb44R3tZ.qBSERAX1IukRXCaurpIuuY9/ldZvORvWlrsE5kCD6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
