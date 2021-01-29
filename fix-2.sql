-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 23, 2019 at 01:13 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fix`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `typ` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `teamone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `teamtwo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `loc` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`typ`, `id`, `teamone`, `teamtwo`, `loc`, `date`) VALUES
('1st T20', 7, 'India  ', 'South Africa', 'Dharamshala', '2109-09-15'),
('2nd T20', 8, 'India  ', 'South Africa', 'Mohali', '2019-09-18'),
('3rd T20', 9, 'India  ', 'South Africa', 'Bengaluru', '2019-09-22'),
('1st TEST ', 4, 'India  ', 'South Africa', 'Visakhapatnam', '2019-10-02'),
('2nd TEST', 5, 'India  ', 'South Africa', 'Pune', '2019-10-10'),
('3rd TEST', 6, 'India  ', 'South Africa', 'Ranchi', '2019-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `typ` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `teamone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `teamtwo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `loc` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `history` AFTER DELETE ON `users` FOR EACH ROW BEGIN
INSERT into history VALUES(OLD.typ,OLD.id,OLD.teamone,OLD.teamtwo,OLD.loc,OLD.date);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `userview2`
-- (See below for the actual view)
--
CREATE TABLE `userview2` (
`typ` varchar(25)
,`id` int(11)
,`teamone` varchar(50)
,`teamtwo` varchar(50)
,`loc` varchar(30)
,`date` date
);

-- --------------------------------------------------------

--
-- Structure for view `userview2`
--
DROP TABLE IF EXISTS `userview2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `userview2`  AS  select `users`.`typ` AS `typ`,`users`.`id` AS `id`,`users`.`teamone` AS `teamone`,`users`.`teamtwo` AS `teamtwo`,`users`.`loc` AS `loc`,`users`.`date` AS `date` from `users` ;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
