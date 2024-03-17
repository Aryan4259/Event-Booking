-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 17, 2024 at 05:58 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_tickets`
--

DROP TABLE IF EXISTS `booked_tickets`;
CREATE TABLE IF NOT EXISTS `booked_tickets` (
  `name` varchar(200) NOT NULL,
  `event_name` varchar(30) DEFAULT NULL,
  `no_of_tickets` int DEFAULT NULL,
  `total` varchar(200) NOT NULL,
  `date` date NOT NULL
) 

--
-- Dumping data for table `booked_tickets`
--

INSERT INTO `booked_tickets` (`name`, `event_name`, `no_of_tickets`, `total`, `date`) VALUES
('nitin', 'mela', 5, '', '0000-00-00'),
('karan', 'Invente', 3, '450', '2024-03-17'),
('nn', 'Instincts', 2, '400', '2024-03-17'),
('nn', 'Sycon', 1, '100', '2024-03-17'),
('nn', 'Invente', 3, '450', '2024-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `eventlist`
--

DROP TABLE IF EXISTS `eventlist`;
CREATE TABLE IF NOT EXISTS `eventlist` (
  `eventId` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Short_desc` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `seats` int DEFAULT NULL,
  `Venue` varchar(50) DEFAULT NULL,
  `price` int DEFAULT NULL,
  PRIMARY KEY (`eventId`)
) 

--
-- Dumping data for table `eventlist`
--

INSERT INTO `eventlist` (`eventId`, `Name`, `Description`, `Short_desc`, `image`, `seats`, `Venue`, `price`) VALUES
(1, 'Sycon', 'Lakshya event where speakers give their speeches', 'Lakshya event where speakers give their speeches', 'sycon.jpg', 87, 'SSN', 100),
(2, 'Invente', 'Technical symposium', 'Technical symposium', 'invente.png', 167, 'SSN CSE dept', 150),
(3, 'Gaming tournament', 'Participate in daily tournaments of games like PUBG Mobile, Garena Free Fire, FIFA 20, 8 Ball Pool, Clash Royale, PUBG PC and many more!', 'Participate in daily tournaments of games', 'gaming.jpg', 30, 'Chennai', 60),
(4, 'Mela', 'SSN Lakshya\'s annual extravaganza \'MELA\' also lives up to the same reputation. Mela witnesses over 250 participants, who assume the role of entrepreneurs for the day by setting up stalls. ', 'SSN Lakshya\'s annual extravaganza \'MELA\' ', 'mela.jpg', 99, 'Bus bay', 50),
(5, 'Instincts', 'SSN INSTINCTS. (Virtual) National level Cultural Fest | SSNCE', 'SSN INSTINCTS. (Virtual) National level Cultural Fest | SSNCE', 'instincts.jpg', 300, 'SSN', 200);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
)

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `mobile`, `pass`) VALUES
('karan', '123', '123'),
('nn', '1234', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
