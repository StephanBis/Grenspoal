-- phpMyAdmin SQL Dump
-- version 3.3.5
-- http://www.phpmyadmin.net
--
-- Machine: 5.200.9.106
-- Genereertijd: 07 Mar 2016 om 16:47
-- Serverversie: 5.5.24
-- PHP-Versie: 5.4.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grenspoal`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `mailing`
--

CREATE TABLE IF NOT EXISTS `mailing` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(50) NOT NULL,
  `Email` varchar(250) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Gegevens worden uitgevoerd voor tabel `mailing`
--

INSERT INTO `mailing` (`Id`, `Naam`, `Email`) VALUES
(1, 'Stephan Bisschop', 'stephanbisschop@hotmail.com'),
(2, 'Stephan Bisschop', 'stephanbisschop@hotmail.com'),
(3, 'test', 'test@hotmail.com'),
(5, 'tes', 'ts@test.com'),
(6, 'dhfg', 'fdghj@text.com'),
(7, 'dfgdg', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `nieuws`
--

CREATE TABLE IF NOT EXISTS `nieuws` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Titel` varchar(50) NOT NULL,
  `Beschrijving` varchar(250) NOT NULL,
  `Datum` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Gegevens worden uitgevoerd voor tabel `nieuws`
--

INSERT INTO `nieuws` (`Id`, `Titel`, `Beschrijving`, `Datum`) VALUES
(1, 'Test', 'Dit is een test', '2016-01-13'),
(2, 'Test2', 'Dit is een test2.', '2016-01-12'),
(3, 'Test3', 'Dit is een test3.', '2016-01-11'),
(4, 'Test4', 'Dit is een test4.', '2016-01-10'),
(5, 'Test5', 'Dit is een test5.', '2016-01-09'),
(7, 'Hoppa', 'Hoppaa2222', '2016-01-13'),
(9, 'jep', 'jepppp', '2016-01-13'),
(10, 'Allerlaatste nieuwtje', 'Test omschrijving', '2016-02-29');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `prijzen`
--

CREATE TABLE IF NOT EXISTS `prijzen` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(50) NOT NULL,
  `Prijs` float NOT NULL,
  `Datum` date NOT NULL,
  `Css` varchar(5) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Gegevens worden uitgevoerd voor tabel `prijzen`
--

INSERT INTO `prijzen` (`Id`, `Naam`, `Prijs`, `Datum`, `Css`) VALUES
(1, 'Diesel', 1.792, '2016-02-26', 'geel'),
(2, 'Euro 95', 1.456, '2016-02-26', 'groen'),
(4, 'AdBlue', 1.123, '2016-02-26', 'blauw'),
(5, 'Diesel rood EN590', 0.777, '2016-02-26', 'rood'),
(34, 'Petroleum', 1.25, '2016-02-26', 'wit'),
(36, 'Euro 98', 1.291, '2016-02-26', 'paars'),
(69, 'Diesel', 1.792, '2016-02-27', 'geel'),
(70, 'Euro 95', 1.456, '2016-02-27', 'groen'),
(71, 'AdBlue', 1.123, '2016-02-27', 'blauw'),
(72, 'Diesel rood EN590', 0.777, '2016-02-27', 'rood'),
(73, 'Petroleum', 1.25, '2016-02-27', 'wit'),
(74, 'Euro 98', 1.291, '2016-02-27', 'paars'),
(75, 'Diesel', 1, '2016-03-01', 'geel'),
(76, 'Euro 95', 1, '2016-03-01', 'groen'),
(77, 'AdBlue', 1, '2016-03-01', 'blauw'),
(78, 'Diesel rood EN590', 1, '2016-03-01', 'rood'),
(79, 'Petroleum', 1, '2016-03-01', 'wit'),
(80, 'Euro 98', 1, '2016-03-01', 'paars'),
(81, 'Diesel', 1, '2016-02-29', 'geel'),
(82, 'Euro 95', 1, '2016-02-29', 'groen'),
(83, 'AdBlue', 1, '2016-02-29', 'blauw'),
(84, 'Diesel rood EN590', 1, '2016-02-29', 'rood'),
(85, 'Petroleum', 1, '2016-02-29', 'wit'),
(86, 'Euro 98', 1, '2016-02-29', 'paars'),
(93, 'Diesel', 0.995, '2016-03-05', 'geel'),
(94, 'Euro 95', 1.025, '2016-03-05', 'groen'),
(95, 'AdBlue', 0.994, '2016-03-05', 'blauw'),
(96, 'Diesel rood EN590', 1.007, '2016-03-05', 'rood'),
(97, 'Petroleum', 0.993, '2016-03-05', 'wit'),
(98, 'Euro 98', 1.009, '2016-03-05', 'paars'),
(99, 'Diesel', 0.997, '2016-03-04', 'geel'),
(100, 'Euro 95', 1.002, '2016-03-04', 'groen'),
(101, 'AdBlue', 1.002, '2016-03-04', 'blauw'),
(102, 'Diesel rood EN590', 0.998, '2016-03-04', 'rood'),
(103, 'Petroleum', 1.002, '2016-03-04', 'wit'),
(104, 'Euro 98', 0.995, '2016-03-04', 'paars');
