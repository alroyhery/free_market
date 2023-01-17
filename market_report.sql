-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 05:06 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market_report`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_free_market_report`
--

CREATE TABLE `tbl_free_market_report` (
  `group` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `period` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `seqno` int(11) NOT NULL,
  `salesarea` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `target` decimal(20,2) DEFAULT NULL,
  `mtdh1` decimal(20,2) DEFAULT NULL,
  `sid` decimal(20,2) DEFAULT NULL,
  `mtd` decimal(20,2) DEFAULT NULL,
  `achv` decimal(20,2) DEFAULT NULL,
  `speedqty` decimal(20,2) DEFAULT NULL,
  `speed` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_free_market_report`
--

INSERT INTO `tbl_free_market_report` (`group`, `period`, `seqno`, `salesarea`, `category`, `target`, `mtdh1`, `sid`, `mtd`, `achv`, `speedqty`, `speed`) VALUES
('Medan', '01.11.2022 s/d 24.11.2022', 1, 'Aceh', 'Floating', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
('Medan ', '01.11.2022 s/d 24.11.2022', 2, '', 'Sinking', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
('Medan ', '01.11.2022 s/d 24.11.2022', 3, '', 'Total', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
('Medan ', '01.11.2022 s/d 24.11.2022', 4, 'North Sumatra 1', 'Floating', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
('Medan ', '01.11.2022 s/d 24.11.2022', 5, '', 'Sinking', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
('Medan ', '01.11.2022 s/d 24.11.2022', 6, '', 'Total', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
('Medan ', '01.11.2022 s/d 24.11.2022', 7, 'Medan', 'Floating', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
('Medan ', '01.11.2022 s/d 24.11.2022', 8, '', 'Sinking', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
('Medan ', '01.11.2022 s/d 24.11.2022', 9, '**', 'Total', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_free_market_report`
--
ALTER TABLE `tbl_free_market_report`
  ADD PRIMARY KEY (`group`,`period`,`seqno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
