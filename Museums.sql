-- phpMyAdmin SQL Dump
-- version 4.9.6
-- https://www.phpmyadmin.net/
--
-- Host: cp47n.myd.infomaniak.com
-- Generation Time: Dec 06, 2023 at 02:10 PM
-- Server version: 10.4.25-MariaDB-1:10.4.25+maria~stretch-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp47n_MuseumAR`
--

-- --------------------------------------------------------

--
-- Table structure for table `Museums`
--

CREATE TABLE `Museums` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `canton` varchar(2) NOT NULL,
  `website` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Museums`
--

INSERT INTO `Museums` (`id`, `name`, `category`, `city`, `canton`, `website`, `type`) VALUES
(1, 'Museum Murten', 'a', 'Murten', 'FR', 'https://www.museummurten.ch', 'Museum'),
(2, 'Museen Bern', 'a', 'Bern', 'BE', 'https://www.museen-bern.ch/de/', 'Museum'),
(3, 'Kunstmuseum St.Gallen', 'a', 'St. Gallen', 'SG', 'https://www.kunstmuseumsg.ch', 'Museum'),
(4, 'Museum\r\nfür Gestaltung\r\nZürich', 'a', 'Zürich', 'ZH', 'https://museum-gestaltung.ch/de/', 'Museum'),
(5, 'Plateforme 10', 'a', 'Lausanne', 'VD', 'https://plateforme10.ch/de/', 'Museum'),
(6, 'Musée Historique Lausanne', 'a', 'Lausanne', 'VD', 'https://www.lausanne.ch/mhl', 'Museum'),
(7, 'Maison Tavel', 'a', 'Geneva', 'GE', 'https://www.mahmah.ch', 'Museum'),
(8, 'MAMCO', 'a', 'Geneva', 'GE', 'https://www.mamco.ch', 'Museum'),
(9, 'Bündner Kunstmuseum', 'a', 'Chur', 'GR', 'https://kunstmuseum.gr.ch/de', 'Museum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Museums`
--
ALTER TABLE `Museums`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Museums`
--
ALTER TABLE `Museums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
