-- phpMyAdmin SQL
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2022 at 07:58 PM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17651176_lucky`
--

-- --------------------------------------------------------
--
-- Table structure for table `BET`
--

CREATE TABLE `BET` (
  `ID` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `ID_SPIN` int(11) DEFAULT NULL,
  `TIME` timestamp NOT NULL DEFAULT current_timestamp(),
  `0` decimal(10,2) UNSIGNED DEFAULT NULL,
  `1` decimal(10,2) UNSIGNED DEFAULT NULL,
  `2` decimal(10,2) UNSIGNED DEFAULT NULL,
  `3` decimal(10,2) UNSIGNED DEFAULT NULL,
  `4` decimal(10,2) UNSIGNED DEFAULT NULL,
  `5` decimal(10,2) UNSIGNED DEFAULT NULL,
  `6` decimal(10,2) UNSIGNED DEFAULT NULL,
  `7` decimal(10,2) UNSIGNED DEFAULT NULL,
  `8` decimal(10,2) UNSIGNED DEFAULT NULL,
  `9` decimal(10,2) UNSIGNED DEFAULT NULL,
  `10` decimal(10,2) UNSIGNED DEFAULT NULL,
  `11` decimal(10,2) UNSIGNED DEFAULT NULL,
  `12` decimal(10,2) UNSIGNED DEFAULT NULL,
  `13` decimal(10,2) UNSIGNED DEFAULT NULL,
  `14` decimal(10,2) UNSIGNED DEFAULT NULL,
  `15` decimal(10,2) UNSIGNED DEFAULT NULL,
  `16` decimal(10,2) UNSIGNED DEFAULT NULL,
  `17` decimal(10,2) UNSIGNED DEFAULT NULL,
  `18` decimal(10,2) UNSIGNED DEFAULT NULL,
  `19` decimal(10,2) UNSIGNED DEFAULT NULL,
  `20` decimal(10,2) UNSIGNED DEFAULT NULL,
  `21` decimal(10,2) UNSIGNED DEFAULT NULL,
  `22` decimal(10,2) UNSIGNED DEFAULT NULL,
  `23` decimal(10,2) UNSIGNED DEFAULT NULL,
  `24` decimal(10,2) UNSIGNED DEFAULT NULL,
  `25` decimal(10,2) UNSIGNED DEFAULT NULL,
  `26` decimal(10,2) UNSIGNED DEFAULT NULL,
  `27` decimal(10,2) UNSIGNED DEFAULT NULL,
  `28` decimal(10,2) UNSIGNED DEFAULT NULL,
  `29` decimal(10,2) UNSIGNED DEFAULT NULL,
  `30` decimal(10,2) UNSIGNED DEFAULT NULL,
  `31` decimal(10,2) UNSIGNED DEFAULT NULL,
  `32` decimal(10,2) UNSIGNED DEFAULT NULL,
  `33` decimal(10,2) UNSIGNED DEFAULT NULL,
  `34` decimal(10,2) UNSIGNED DEFAULT NULL,
  `35` decimal(10,2) UNSIGNED DEFAULT NULL,
  `36` decimal(10,2) UNSIGNED DEFAULT NULL,
  `1ST12` decimal(10,2) UNSIGNED DEFAULT NULL,
  `2ND12` decimal(10,2) UNSIGNED DEFAULT NULL,
  `3RD12` decimal(10,2) UNSIGNED DEFAULT NULL,
  `1STC` decimal(10,2) UNSIGNED DEFAULT NULL,
  `2NDC` decimal(10,2) UNSIGNED DEFAULT NULL,
  `3RDC` decimal(10,2) UNSIGNED DEFAULT NULL,
  `1STH` decimal(10,2) UNSIGNED DEFAULT NULL,
  `2NDH` decimal(10,2) UNSIGNED DEFAULT NULL,
  `EVEN` decimal(10,2) UNSIGNED DEFAULT NULL,
  `ODD` decimal(10,2) UNSIGNED DEFAULT NULL,
  `RED` decimal(10,2) UNSIGNED DEFAULT NULL,
  `BLACK` decimal(10,2) UNSIGNED DEFAULT NULL,
  `TOTAL` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `BET`
--

INSERT INTO `BET` (`ID`, `ID_USER`, `ID_SPIN`, `TIME`, `0`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `33`, `34`, `35`, `36`, `1ST12`, `2ND12`, `3RD12`, `1STC`, `2NDC`, `3RDC`, `1STH`, `2NDH`, `EVEN`, `ODD`, `RED`, `BLACK`, `TOTAL`) VALUES
(1, 0, NULL, '2022-04-23 19:50:52', 0.00, 0.00, 0.00, 0.00, 0.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 0, NULL, '2022-04-23 19:51:07', 0.00, 0.00, 0.00, 0.00, 0.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 0, NULL, '2022-04-23 19:51:18', 0.00, 0.00, 0.00, 0.00, 0.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 0, NULL, '2022-04-23 19:51:25', 0.00, 0.00, 0.00, 0.00, 0.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 0, NULL, '2022-04-23 19:52:20', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 0, NULL, '2022-04-23 19:58:36', 0.00, 0.00, 0.00, 0.00, 0.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 0, NULL, '2022-04-24 17:58:33', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `USER`
--

CREATE TABLE `USER` (
  `ID` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `USER`
--

INSERT INTO `USER` (`ID`, `TOTAL`) VALUES
(0, 9984);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BET`
--
ALTER TABLE `BET`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BET`
--
ALTER TABLE `BET`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
