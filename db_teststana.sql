-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 01:39 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_teststana`
--

-- --------------------------------------------------------

--
-- Table structure for table `artis`
--

CREATE TABLE `artis` (
  `id_artis` varchar(55) NOT NULL,
  `nm_artis` varchar(55) NOT NULL,
  `jenis_kelamin` varchar(55) NOT NULL,
  `bayaran` int(55) NOT NULL,
  `award` int(55) NOT NULL,
  `negara` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artis`
--

INSERT INTO `artis` (`id_artis`, `nm_artis`, `jenis_kelamin`, `bayaran`, `award`, `negara`) VALUES
('A001', 'ROBERT DOWNEY JR', 'PRIA', 0, 2, 'AS'),
('A002', 'ANGELINA JOLIE', 'WANITA', 700000000, 1, 'AS'),
('A003', 'JACKIE CHAN', 'PRIA', 200000000, 7, 'HK'),
('A004', 'JOE TASLIM', 'PRIA', 350000000, 1, 'ID'),
('A005', 'CHELSEA ISLAN', 'WANITA', 300000000, 0, 'ID');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` varchar(10) NOT NULL,
  `nm_film` varchar(55) NOT NULL,
  `genre` varchar(55) NOT NULL,
  `artis` varchar(55) NOT NULL,
  `produser` varchar(55) NOT NULL,
  `pendapatan` int(55) NOT NULL,
  `nominasi` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `nm_film`, `genre`, `artis`, `produser`, `pendapatan`, `nominasi`) VALUES
('F001', 'IRON MAN', 'G001', 'A001', 'PD001', 2000000000, 3),
('F002', 'IRON MAN 2', 'G001', 'A001', 'PD001', 1800000000, 2),
('F003', 'IRON MAN 3', 'G001', 'A001', 'PD001', 1200000000, 0),
('F004', 'AVENGER CIVIL WAR', 'G001', 'A001', 'PD001', 2000000000, 1),
('F005', 'SPIDERMAN HOME COMING', 'G001', 'A001', 'PD001', 1300000000, 0),
('F006', 'THE RAID', 'G001', 'A004', 'PD003', 800000000, 5),
('F007', 'FAST & FURIOUS', 'G001', 'A004', 'PD005', 830000000, 2),
('F008', 'HABIBIE DAN AINUN', 'G004', 'A005', 'PD003', 670000000, 4),
('F009', 'POLICE STORY', 'G001', 'A005', 'PD002', 700000000, 3),
('F010', 'POLICE STORY 2', 'G001', 'A003', 'PD002', 710000000, 1),
('F011', 'POLICE STORY 3', 'G001', 'A003', 'PD002', 615000000, 0),
('F012', 'RUSH HOUR', 'G003', 'A003', 'PD005', 695000000, 2),
('F013', 'KUNGFU PANDA', 'G003', 'A003', 'PD005', 923000000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` varchar(55) NOT NULL,
  `nm_genre` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `nm_genre`) VALUES
('G001', 'ACTION'),
('G002', 'HORROR'),
('G003', 'COMEDY'),
('G004', 'DRAMA'),
('G005', 'THRILLER'),
('G006', 'FICTION');

-- --------------------------------------------------------

--
-- Table structure for table `produser`
--

CREATE TABLE `produser` (
  `id_produser` varchar(55) NOT NULL,
  `nm_produser` varchar(55) NOT NULL,
  `international` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produser`
--

INSERT INTO `produser` (`id_produser`, `nm_produser`, `international`) VALUES
('PD001', 'MARVEL', 'YA'),
('PD002', 'HONGKONG CINEMA', 'YA'),
('PD003', 'RAPI FILM', 'TIDAK'),
('PD004', 'PARKIT', 'TIDAK'),
('PD005', 'PARAMOUNT PICTURE', 'YA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artis`
--
ALTER TABLE `artis`
  ADD PRIMARY KEY (`id_artis`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `genre` (`genre`),
  ADD KEY `artis` (`artis`),
  ADD KEY `produser` (`produser`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `produser`
--
ALTER TABLE `produser`
  ADD PRIMARY KEY (`id_produser`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`genre`) REFERENCES `genre` (`id_genre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `film_ibfk_2` FOREIGN KEY (`artis`) REFERENCES `artis` (`id_artis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `film_ibfk_3` FOREIGN KEY (`produser`) REFERENCES `produser` (`id_produser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
