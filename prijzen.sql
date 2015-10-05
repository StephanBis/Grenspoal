-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 05 okt 2015 om 17:54
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
(1, 'Diesel', 1.792, '2015-10-05', 'geel'),
(2, 'Euro 95', 1.456, '2015-10-05', 'groen'),
(4, 'AdBlue', 1.123, '2015-10-05', 'blauw'),
(5, 'Diesel rood EN590', 0.777, '2015-10-05', 'rood'),
(34, 'Petroleum', 1.25, '2015-10-05', 'wit'),
(36, 'Euro 98', 1.291, '2015-10-05', 'paars');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `prijzen`
--
ALTER TABLE `prijzen`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `prijzen`
--
ALTER TABLE `prijzen`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
