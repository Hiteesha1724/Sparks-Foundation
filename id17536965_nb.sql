-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2021 at 04:44 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17536965_nb`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sno` int(20) NOT NULL,
  `sender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `receiver` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `amount` bigint(50) NOT NULL,
  `datetime` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`sno`, `sender`, `receiver`, `amount`, `datetime`) VALUES
(1, 'john', 'Ayush', 2000, '2021-09-05 06:13:38.720142'),
(2, 'john', 'HITEESHA GELLANKI', 3000, '2021-09-05 06:14:20.696342'),
(3, 'kushi', 'krish', 4000, '2021-09-05 06:14:51.785808'),
(4, 'kushi', 'HITEESHA GELLANKI', 2000, '2021-09-05 06:15:25.280537'),
(5, 'HITEESHA GELLANKI', 'krish', 12, '2021-09-05 06:23:53.025073'),
(6, 'krish', 'HITEESHA GELLANKI', 12, '2021-09-05 07:40:40.976016'),
(7, 'HITEESHA GELLANKI', 'santhi', 2000, '2021-09-05 07:41:09.463589'),
(8, 'kushi', 'anju', 4000, '2021-09-05 07:42:08.132294'),
(9, 'priya', 'priyanka', 35, '2021-09-05 07:44:22.991346'),
(10, 'HITEESHA GELLANKI', 'santhi', 2000, '2021-09-05 07:48:32.012204'),
(11, 'BYLUPPALA ASHWINI', 'HITEESHA GELLANKI', 5, '2021-09-05 07:58:09.765233'),
(12, 'santheswara rao ', 'mallika', 2000, '2021-09-05 08:24:17.238990'),
(13, 'HITEESHA GELLANKI', 'krish', 100, '2021-09-05 09:02:54.128732'),
(14, 'Bobby', 'Ayush', 900, '2021-09-10 14:16:52.281080'),
(15, 'Devika', 'Ayush', 100, '2021-09-10 14:20:04.930656'),
(16, 'ramnivas', 'krish', 100, '2021-09-15 12:10:17.359320'),
(17, 'Devika', 'HITEESHA GELLANKI', 650, '2021-09-15 12:20:28.507027'),
(18, 'Rohith Bannela', 'kushi', 14, '2021-09-16 11:24:44.427681'),
(19, 'sirisha', 'HITEESHA GELLANKI', 1000, '2021-09-19 04:10:43.811491');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `balance` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'HITEESHA GELLANKI', 'kushigellanki1724@gmail.com', 7555),
(2, 'Ayush', 'ayush@s.com', 11000),
(3, 'kushi', 'kushi2@yes.com', 10014),
(4, 'krish', 'kris@kr.com', 10200),
(5, 'john', 'john5@gmail.com', 10000),
(6, 'santhi', 'santhi@rediff.com', 12000),
(7, 'anju', 'anju@gmail.com', 10000),
(8, 'mallika', 'banu@kr.com', 5000),
(9, 'priya', 'priya.21@gmail.com', 6965),
(10, 'priyanka', 'priyanka@gmail.com', 7035),
(11, 'BYLUPPALA ASHWINI', 'byluppalaashwini@gmail.com', 6),
(12, 'santheswara rao ', 'santheswararao@gmail.com', 8000),
(13, 'Bobby', 'jksriram2906@gmail.com', 100),
(14, 'Devika', 'devika@gmail.com', 4250),
(15, 'ramnivas', 'ramnivas@gmail.com', 4900),
(16, 'me', '19J41A0523@mrec.ac.in', 5999),
(17, 'Rohith Bannela', 'nxhjdjfhfbfuxhd@gmail.com', 1414),
(18, 'Sai', 'sai@gmail.com', 5000),
(19, 'sirisha', 'sirisha@gmail.com', 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
