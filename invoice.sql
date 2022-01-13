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
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` varchar(225) DEFAULT NULL,
  `user_id` varchar(225) DEFAULT NULL,
  `invoice_id` varchar(225) DEFAULT NULL,
  `payment_plan` varchar(225) DEFAULT NULL,
  `plan_id` varchar(225) DEFAULT NULL,
  `quantity` varchar(225) DEFAULT NULL,
  `amount_due` varchar(11) DEFAULT NULL,
  `amount_paid` varchar(11) DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  `title` varchar(225) DEFAULT NULL,
  `name` varchar(225) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phonenumber` varchar(225) DEFAULT NULL,
  `description` text,
  `event_id` varchar(225) DEFAULT NULL,
  `place` varchar(225) DEFAULT NULL,
  `company` varchar(225) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `time_created` time DEFAULT NULL,
  `custom` text,
  `checkin` int(11) DEFAULT NULL,
  `agent` varchar(225) DEFAULT NULL,
  `ref` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `hash_id`, `user_id`, `invoice_id`, `payment_plan`, `plan_id`, `quantity`, `amount_due`, `amount_paid`, `status`, `title`, `name`, `email`, `phonenumber`, `description`, `event_id`, `place`, `company`, `date_created`, `time_created`, `custom`, `checkin`, `agent`, `ref`) VALUES
(26, '1616613958_1020', NULL, 'COMP_34911_NCIOCIEVDOE_1616613958', 'African Heritage Architecture Competition\r\n', '21', 'quantity', '100', NULL, 'Unpaid', 'African Heritage Architecture Competition\r\n', 'Akole Banji', 'boardsp2322332eck@gmail.com', '08168785591', 'Payment for African Heritage Architecture Competition\r\n', '3', 'place', 'company', '2021-03-24', '07:25:58', NULL, NULL, NULL, NULL),
(27, '1616614010_7487', NULL, 'COMP_97452_IEICNCDVOEO_1616614010', 'African Heritage Architecture Competition\r\n', '21', 'quantity', '100', NULL, 'Unpaid', 'African Heritage Architecture Competition\r\n', 'Akole Banji', 'boardsp2322332eck@gmail.com', '08168785591', 'Payment for African Heritage Architecture Competition\r\n', '4', 'place', 'company', '2021-03-24', '07:26:50', NULL, NULL, NULL, NULL),
(28, '1616614268_4419', NULL, 'COMP_89110_ODEINECOCIV_1616614268', 'African Heritage Architecture Competition\r\n', '21', 'quantity', '100', '1', 'paid', 'African Heritage Architecture Competition\r\n', 'Akole Banji', 'boardsp2322332eck@gmail.com', '08168785591', 'Payment for African Heritage Architecture Competition\r\n', '2000168', 'place', 'company', '2021-03-24', '07:31:08', NULL, NULL, NULL, NULL),
(29, '1616614560_6318', NULL, 'COMP_50009_CENEIIODCOV_1616614560', 'African Heritage Architecture Competition\r\n', '21', 'quantity', '100', '1', 'paid', 'African Heritage Architecture Competition\r\n', 'Akole Banji', 'board345657speck@gmail.com', '08168785591', 'Payment for African Heritage Architecture Competition\r\n', '2000169', 'place', 'company', '2021-03-24', '07:36:00', NULL, NULL, NULL, NULL),
(30, '1616614928_6126', NULL, 'COMP_91432_OIONCEVDECI_1616614928', 'African Heritage Architecture Competition\r\n', '21', 'quantity', '50', '1', 'paid', 'African Heritage Architecture Competition\r\n', 'Akole Banji', 'boards123456787peck@gmail.com', '08168785591', 'Payment for African Heritage Architecture Competition\r\n', '2000170', 'place', 'company', '2021-03-24', '07:42:08', NULL, NULL, NULL, NULL),
(31, '1616613407_7587', NULL, 'CRS_70441_EINVODCIOEC_1616613407', 'Course', '23', 'quantity', '172', NULL, 'Unpaid', 'HT1210 - Anti-Developed Clinic: The Becoming of a Design Culture Course', 'Akole Banji', 'boards123456787peck@gmail.com', '08168785591', 'Payment for HT1210 - Anti-Developed Clinic: The Becoming of a Design Culture Course', '1000111', 'place', 'company', '2021-03-24', '07:16:47', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
