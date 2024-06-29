-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 06:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineartgallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(80) NOT NULL,
  `EMAIL` varchar(320) NOT NULL,
  `PHONE` varchar(11) NOT NULL,
  `password` varchar(320) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `NAME`, `EMAIL`, `PHONE`, `password`) VALUES
(1, 'Rabeya Binte Ali', 'rabeya@onlineartgallery.org', '1981588213', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `arts`
--

CREATE TABLE `arts` (
  `ID` int(11) NOT NULL,
  `CreatorID` int(11) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `CreationDate` date NOT NULL,
  `Likes` bigint(20) NOT NULL DEFAULT 0,
  `SellingDate` date DEFAULT NULL,
  `BuyerID` int(11) DEFAULT NULL,
  `Price` bigint(20) NOT NULL,
  `img_path` varchar(320) DEFAULT NULL,
  `Title` varchar(60) NOT NULL,
  `Tags` varchar(350) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `arts`
--

INSERT INTO `arts` (`ID`, `CreatorID`, `Category`, `CreationDate`, `Likes`, `SellingDate`, `BuyerID`, `Price`, `img_path`, `Title`, `Tags`, `Description`) VALUES
(1, 2, 'abstract', '2024-05-14', 0, '2024-05-15', 1, 500, 'abstract1.jpg', 'Vincenty', 'Vincent Van Vogh, Starry Night', ''),
(2, 2, 'abstract', '2024-05-14', 0, '2024-05-15', 1, 1000, 'abstract2.jpg', 'Night Sky', 'Vincent Van Vogh, Starry Night', ''),
(3, 2, 'scenary', '2024-05-14', 0, NULL, NULL, 200, 'scenary1.jpeg', '3Boats', 'village, river, boats', ''),
(4, 2, 'scenary', '2024-05-12', 0, NULL, NULL, 300, 'scenary2.jpeg', 'Travel', 'riverway, boat, travel', ''),
(5, 2, 'alpona', '2024-05-12', 0, NULL, NULL, 500, 'alpona1.png', 'Alpona', 'desi art', ''),
(6, 2, 'alpona', '2024-05-13', 0, NULL, NULL, 500, 'alpona2.jpg', 'Alpona2', 'desi art', ''),
(7, 2, 'digital', '2024-05-13', 0, NULL, NULL, 100, 'digital1.jpeg', 'Rafia', 'portrait, painting', ''),
(8, 2, 'digital', '2024-05-15', 0, NULL, NULL, 300, 'digital2.jpeg', 'Rabeya', 'portrait, sketch', '');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `ID` int(11) NOT NULL,
  `PASSWORD` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`ID`, `PASSWORD`) VALUES
(1, 'rabeyapass'),
(2, 'nowreenpass');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `ID` int(11) NOT NULL,
  `ArtsID` int(11) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(80) NOT NULL,
  `EMAIL` varchar(320) NOT NULL,
  `BIO` varchar(500) NOT NULL,
  `img_path` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `NAME`, `EMAIL`, `BIO`, `img_path`) VALUES
(1, 'Rabeya Binte Ali', 'rabeyabisc@gmail.com', 'BUP\'s resident techie by day, art gallery enthusiast by night!   That\'s me, Rabeya Binte Ali. While I may not be wielding a paintbrush myself (yet!), I get my creative fix by exploring the incredible works at local galleries. Infocomm Engineering keeps my brain busy, but art feeds my soul. Let\'s chat exhibitions!  pen_spark', 'rbali.jpg'),
(2, 'Nowreen Islam', 'nowreenislam@gmail.com', 'Hey there! I\'m Nowreen Islam, an Information Communication Engineering student at BUP by day and a creative explorer by night. I channel my ideas into digital illustrations, vibrant alponas, calming landscapes, and abstract pieces. It\'s my way of translating the world around me into colorful expressions. Let\'s connect and create together!', 'nowreearts.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `arts`
--
ALTER TABLE `arts`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `Artist` (`CreatorID`),
  ADD KEY `Buyer` (`BuyerID`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD KEY `UserID` (`ID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Art` (`ArtsID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `arts`
--
ALTER TABLE `arts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arts`
--
ALTER TABLE `arts`
  ADD CONSTRAINT `Artist` FOREIGN KEY (`CreatorID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Buyer` FOREIGN KEY (`BuyerID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `security`
--
ALTER TABLE `security`
  ADD CONSTRAINT `UserID` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `Art` FOREIGN KEY (`ArtsID`) REFERENCES `arts` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
