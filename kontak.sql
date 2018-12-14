-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 08:36 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kontak`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `no` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`no`, `nama`, `email`, `phone`) VALUES
(1, 'Putri Angriani', 'putriangriani14@gmail.com', '085255595255'),
(2, 'Ghina Syukriyah', 'ghinasyukriyah@gmail.com', '089657432123'),
(3, 'Sitti Nur Fadillah', 'nurfadillah11@gmail.com', '085234155675'),
(4, 'Andi Marimar Muctamar', 'andinoni14@gmail.com', '082123876972'),
(5, 'Cici Purnamasari', 'cicipurnama14@gmail.com', '089732178990'),
(6, 'Dhinda Fitri Wiludjeng', 'dhindafitri@gmail.com', '089123999011'),
(7, 'Astuti Mayangsari', 'mayangsari@gmail.com', '085244595999'),
(8, 'Tuti Amalia', 'tutiiiamal@gmail.com', '082244595888'),
(9, 'Riny Yustica Dewi', 'rinyyustica15@gmail.com', '082333242890'),
(10, 'Okti Asrinawati', 'asriokti@gmail.com', '089999172145');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
