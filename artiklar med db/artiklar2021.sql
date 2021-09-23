-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1:3306
-- Tid vid skapande: 23 sep 2021 kl 08:29
-- Serverversion: 5.7.23
-- PHP-version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `artiklar2021`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `artiklar`
--

DROP TABLE IF EXISTS `artiklar`;
CREATE TABLE IF NOT EXISTS `artiklar` (
  `rubrik` varchar(30) NOT NULL,
  `beskrivning` varchar(255) NOT NULL,
  `pris` int(9) NOT NULL,
  `bild` varchar(255) NOT NULL,
  `art_pk` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`art_pk`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `artiklar`
--

INSERT INTO `artiklar` (`rubrik`, `beskrivning`, `pris`, `bild`, `art_pk`) VALUES
('new holland', 'riktig skit skrot', 20, 'bild1.jpg', 1),
('Ferguson', 'mycket trevlig traktor till ett bra pris med trepunkts lyft och 6 st dubbelverkande hydraluttag.', 300, 'bild2.jpg', 2),
('new holland', 'riktig skit skrot', 20, 'bild1.jpg', 3),
('Ferguson', 'mycket trevlig traktor till ett bra pris med trepunkts lyft och 6 st dubbelverkande hydraluttag.', 300, 'bild2.jpg', 4);

-- --------------------------------------------------------

--
-- Tabellstruktur `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `user_pk` varchar(255) NOT NULL,
  PRIMARY KEY (`user_pk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `cart`
--

INSERT INTO `cart` (`user_pk`) VALUES
('pjcup4625ndiajlit0991l3n2t');

-- --------------------------------------------------------

--
-- Tabellstruktur `cartartikel`
--

DROP TABLE IF EXISTS `cartartikel`;
CREATE TABLE IF NOT EXISTS `cartartikel` (
  `user_fk` varchar(255) NOT NULL,
  `art_fk` int(255) NOT NULL,
  `antal` int(255) NOT NULL,
  `cartartikel_pk` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cartartikel_pk`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `cartartikel`
--

INSERT INTO `cartartikel` (`user_fk`, `art_fk`, `antal`, `cartartikel_pk`) VALUES
('pjcup4625ndiajlit0991l3n2t', 1, 2, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
