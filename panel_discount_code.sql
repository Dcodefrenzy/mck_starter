-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2021 at 07:13 PM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 7.1.33-34+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mckodevc_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `panel_discount_code`
--

CREATE TABLE `panel_discount_code` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_discount_code` varchar(225) DEFAULT NULL,
  `input_discount_amount` varchar(225) DEFAULT NULL,
  `event_id` varchar(225) DEFAULT NULL,
  `used_by` varchar(225) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `time_created` time DEFAULT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_discount_code`
--

INSERT INTO `panel_discount_code` (`id`, `input_discount_code`, `input_discount_amount`, `event_id`, `used_by`, `date_created`, `time_created`, `hash_id`, `status`) VALUES
(1, 'DGFT1234', '25', '2000170', 'Akole Banji', '2021-03-31', '07:20:21', '12345678965', '1'),
(2, 'DGFT12343444', '78', '1000111', 'Akole Banji', '2021-03-31', '07:20:21', NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `panel_discount_code`
--
ALTER TABLE `panel_discount_code`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panel_discount_code`
--
ALTER TABLE `panel_discount_code`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
