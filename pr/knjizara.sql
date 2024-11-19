-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 11:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knjizara`
--

-- --------------------------------------------------------

--
-- Table structure for table `knjige`
--

CREATE TABLE `knjige` (
  `Naziv` text NOT NULL,
  `Pisac` text NOT NULL,
  `Cena` int(11) NOT NULL,
  `Kategorija` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `knjige`
--

INSERT INTO `knjige` (`Naziv`, `Pisac`, `Cena`, `Kategorija`) VALUES
('Stakleni presto', 'Sara Dz Mas', 1000, 'Fantastika'),
('Kruna ponoci', 'Sara Dz Mas', 1300, 'Fantastika'),
('Naslednica vatre', 'Sara Dz Mas', 1500, 'Fantastika'),
('Kraljica senki', 'Sara Dz Mas', 1700, 'Fantastika'),
('Carstvo oluja', 'Sara Dz Mas', 2000, 'Fantastika'),
('Toranj praskozorja', 'Sara Dz Mas', 2200, 'Fantastika'),
('Jedan dan', 'Dejvid Nikols', 1700, 'Ljubavni'),
('Zavedi me knjigama', 'Kejt Bromli', 1300, 'Ljubavni'),
('Sve sto me podseca na njega', 'Kolin Huver', 1500, 'Ljubavni'),
('Mala knjizara na obali', 'Dzeni kolgan', 1450, 'Ljubavni'),
('Sedam muzeva Evelin Hjugo', 'Tejlor Dzenkins Rid', 1500, 'Ljubavni'),
('Ljubavno pismo', 'Lusinda Rajli', 1700, 'Ljubavni');

-- --------------------------------------------------------

--
-- Table structure for table `porudzbina`
--

CREATE TABLE `porudzbina` (
  `ImePrezime` text NOT NULL,
  `Adresa` text NOT NULL,
  `Broj` int(11) NOT NULL,
  `Mesto` text NOT NULL,
  `PostanskiBr` varchar(5) NOT NULL,
  `Telefon` varchar(20) NOT NULL,
  `Knjiga` text NOT NULL,
  `Kolicina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `porudzbina`
--

INSERT INTO `porudzbina` (`ImePrezime`, `Adresa`, `Broj`, `Mesto`, `PostanskiBr`, `Telefon`, `Knjiga`, `Kolicina`) VALUES
('Teodora Miladinovic', 'Bratstva Jedinstva', 13, 'Srpski Miletic', '25244', '069 0158911', 'Carstvo oluja', 1),
('Nevena Mosic', 'Toplice Milana', 14, 'Novi Sad', '21000', '061 8976543', 'Jedan dan', 2),
('Marko Markovic', 'Rumenacka ', 132, 'Novi Sad', '21000', '063 4567892', 'Stakleni presto', 1),
('Tamara Miladinovic', 'Stojana Ljubica', 86, 'Srpski Miletic', '25244', '0651234564', 'Ljubavno pismo', 3),
('Marija Cvetkovic', 'Marka Markovica', 123, 'Beograd', '11000', '0678956432', 'Sve sto me podseca na njega', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
