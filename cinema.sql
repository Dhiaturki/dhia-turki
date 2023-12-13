-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 11:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mot2pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `name`, `email`, `mot2pass`) VALUES
(1, 'admin', 'admin@gmail.com', 'azerty');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `idclient` int(10) NOT NULL,
  `nomc` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mot2pass` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`idclient`, `nomc`, `email`, `mot2pass`) VALUES
(1, 'dhia', 'dhiatrk@gmail.com', 123456789),
(2, 'turki', 'trk@gmail.com', 65);

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `idclient` int(50) NOT NULL,
  `id_film` int(50) NOT NULL,
  `id_fav` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`idclient`, `id_film`, `id_fav`) VALUES
(1, 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `idfilm` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `director` varchar(20) NOT NULL,
  `reviews` int(2) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `duree` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`idfilm`, `title`, `director`, `reviews`, `genre`, `img`, `duree`) VALUES
(11, 'spider-man no way ho', 'Jon Watts', 6, 'action', '656c5f8d4a98f.jpg', '180m'),
(13, 'The Shawshank Redemp', 'Frank Darabont', 10, 'Drama', '656c60acbb328.jpg', '120m'),
(14, 'journey', 'ss', 4, 'Adventure', '656c90684b1d4.jpg', '80m'),
(19, 'spider-man no way home', 'Jon Watts', 10, 'Drama', '6574f29025609.jpg', '300m'),
(21, 'The godfather', 'Francis Ford Coppola', 7, 'Drama', '65778d40dcf27.jpg', '200m'),
(22, 'intersteller', 'Christopher Nolan', 10, 'Fantasy', '657857988efc2.jpg', '200m'),
(23, 'the Dark Knight', 'Christopher Nolan', 9, 'Action', '657858038b951.jpg', '220m');

-- --------------------------------------------------------

--
-- Table structure for table `salle`
--

CREATE TABLE `salle` (
  `idsalle` int(10) NOT NULL,
  `namesalle` varchar(20) NOT NULL,
  `capaciti` int(5) NOT NULL,
  `prix` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salle`
--

INSERT INTO `salle` (`idsalle`, `namesalle`, `capaciti`, `prix`) VALUES
(2, 'salle1', 50, 45),
(3, 'salle2', 50, 45),
(6, 'salle3', 50, 45);

-- --------------------------------------------------------

--
-- Table structure for table `showw`
--

CREATE TABLE `showw` (
  `id_show` int(10) NOT NULL,
  `id_film` int(10) NOT NULL,
  `id_salle` int(10) NOT NULL,
  `start` varchar(50) NOT NULL,
  `fin` varchar(50) NOT NULL,
  `nb_client` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `showw`
--

INSERT INTO `showw` (`id_show`, `id_film`, `id_salle`, `start`, `fin`, `nb_client`) VALUES
(21, 11, 2, '2023-12-04 8:30', '2023-12-04 11:30', 0),
(23, 11, 2, '2023-12-07 8:30', '2023-12-07 11:30', 0),
(24, 19, 3, '2023-12-06 8:30', '2023-12-06 13:30', 0),
(25, 21, 6, '2023-12-29 14:30', '2023-12-29 17:50', 0),
(26, 13, 3, '2023-12-19 11:00', '2023-12-19 13:00', 0),
(27, 11, 2, '2023-12-12 8:30', '2023-12-12 11:30', 0),
(28, 13, 2, '2023-12-22 9:00', '2023-12-22 11:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idclient`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id_fav`),
  ADD KEY `fkf5` (`idclient`),
  ADD KEY `cinema_fk3` (`id_film`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`idfilm`);

--
-- Indexes for table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`idsalle`);

--
-- Indexes for table `showw`
--
ALTER TABLE `showw`
  ADD PRIMARY KEY (`id_show`),
  ADD KEY `cinema_fk1` (`id_film`),
  ADD KEY `cinema_fk2` (`id_salle`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `idclient` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id_fav` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `idfilm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `salle`
--
ALTER TABLE `salle`
  MODIFY `idsalle` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `showw`
--
ALTER TABLE `showw`
  MODIFY `id_show` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `showw`
--
ALTER TABLE `showw`
  ADD CONSTRAINT `cinema_fk1` FOREIGN KEY (`id_film`) REFERENCES `film` (`idfilm`),
  ADD CONSTRAINT `cinema_fk2` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`idsalle`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
