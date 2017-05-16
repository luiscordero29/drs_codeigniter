-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2017 at 02:55 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2017_drs`
--

-- --------------------------------------------------------

--
-- Table structure for table `drs_usuarios`
--

CREATE TABLE `drs_usuarios` (
  `dus_id` bigint(20) NOT NULL,
  `dus_usuario` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dus_clave` text COLLATE utf8_unicode_ci,
  `dus_correo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dus_estatus` enum('SI','NO') COLLATE utf8_unicode_ci DEFAULT 'NO',
  `dus_ruta` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drs_usuarios`
--
ALTER TABLE `drs_usuarios`
  ADD PRIMARY KEY (`dus_id`),
  ADD UNIQUE KEY `user` (`dus_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drs_usuarios`
--
ALTER TABLE `drs_usuarios`
  MODIFY `dus_id` bigint(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
