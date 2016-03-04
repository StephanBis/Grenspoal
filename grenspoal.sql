-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 26 feb 2016 om 15:11
-- Serverversie: 5.6.21
-- PHP-versie: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `grenspoal`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `mailing`
--

CREATE TABLE IF NOT EXISTS `mailing` (
`Id` int(11) NOT NULL,
  `Naam` varchar(50) NOT NULL,
  `Email` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `mailing`
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
`Id` int(11) NOT NULL,
  `Titel` varchar(50) NOT NULL,
  `Beschrijving` varchar(250) NOT NULL,
  `Datum` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `nieuws`
--

INSERT INTO `nieuws` (`Id`, `Titel`, `Beschrijving`, `Datum`) VALUES
(1, 'Test', 'Dit is een test', '2016-01-13'),
(2, 'Test2', 'Dit is een test2.', '2016-01-12'),
(3, 'Test3', 'Dit is een test3.', '2016-01-11'),
(4, 'Test4', 'Dit is een test4.', '2016-01-10'),
(5, 'Test5', 'Dit is een test5.', '2016-01-09'),
(7, 'Hoppa', 'Hoppaa2222', '2016-01-13'),
(9, 'jep', 'jepppp', '2016-01-13');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `prijzen`
--

CREATE TABLE IF NOT EXISTS `prijzen` (
`Id` int(11) NOT NULL,
  `Naam` varchar(50) NOT NULL,
  `Prijs` float NOT NULL,
  `Datum` date NOT NULL,
  `Css` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `prijzen`
--

INSERT INTO `prijzen` (`Id`, `Naam`, `Prijs`, `Datum`, `Css`) VALUES
(1, 'Diesel', 1.792, '2016-01-13', 'geel'),
(2, 'Euro 95', 1.456, '2016-01-13', 'groen'),
(4, 'AdBlue', 1.123, '2016-01-13', 'blauw'),
(5, 'Diesel rood EN590', 0.777, '2016-01-13', 'rood'),
(34, 'Petroleum', 1.25, '2016-01-13', 'wit'),
(36, 'Euro 98', 1.291, '2016-01-13', 'paars');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `mailing`
--
ALTER TABLE `mailing`
 ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `nieuws`
--
ALTER TABLE `nieuws`
 ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `prijzen`
--
ALTER TABLE `prijzen`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `mailing`
--
ALTER TABLE `mailing`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT voor een tabel `nieuws`
--
ALTER TABLE `nieuws`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT voor een tabel `prijzen`
--
ALTER TABLE `prijzen`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
