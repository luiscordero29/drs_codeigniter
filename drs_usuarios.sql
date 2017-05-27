-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2017 at 12:09 AM
-- Server version: 5.7.18-0ubuntu0.17.04.1
-- PHP Version: 7.0.18-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drs_codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `drs_usuarios`
--

CREATE TABLE `drs_usuarios` (
  `dus_id` bigint(20) NOT NULL,
  `dus_usuario` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `dus_clave` text COLLATE utf8_unicode_ci,
  `dus_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dus_estatus` enum('SI','NO') COLLATE utf8_unicode_ci DEFAULT 'NO',
  `dus_ruta` text COLLATE utf8_unicode_ci,
  `dus_apellidos` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `dus_nombres` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `dus_identidad` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dus_direccion` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `dus_telefono` char(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drs_usuarios`
--
ALTER TABLE `drs_usuarios`
  ADD PRIMARY KEY (`dus_id`),
  ADD UNIQUE KEY `dus_identidad` (`dus_identidad`),
  ADD UNIQUE KEY `dus_usuario` (`dus_usuario`) USING BTREE,
  ADD UNIQUE KEY `dus_email` (`dus_email`);

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
