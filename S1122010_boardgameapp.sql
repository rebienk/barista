-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 31 okt 2018 om 03:06
-- Serverversie: 10.2.8-MariaDB
-- PHP-versie: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `S1122010_boardgameapp`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `battles`
--

CREATE TABLE IF NOT EXISTS `battles` (
  `id` int(11) NOT NULL,
  `dtPlayed` date NOT NULL,
  `gameid` int(11) NOT NULL,
  `playerid01` int(11) NOT NULL,
  `playerid02` int(11) NOT NULL,
  `playerid03` int(11) DEFAULT NULL,
  `playerid04` int(11) DEFAULT NULL,
  `wonby` int(11) NOT NULL,
  `score` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `battles`
--

INSERT INTO `battles` (`id`, `dtPlayed`, `gameid`, `playerid01`, `playerid02`, `playerid03`, `playerid04`, `wonby`, `score`) VALUES
(4, '2002-08-20', 1, 1, 3, 2, 4, 2, '4'),
(5, '2018-10-31', 1, 1, 3, 1, 3, 1, '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(4) NOT NULL,
  `name` varchar(128) NOT NULL,
  `nop` varchar(128) NOT NULL,
  `dor` year(4) NOT NULL,
  `publisherid` int(4) DEFAULT NULL,
  `duration` varchar(32) DEFAULT NULL,
  `description` varchar(12800) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `games`
--

INSERT INTO `games` (`id`, `name`, `nop`, `dor`, `publisherid`, `duration`, `description`) VALUES
(1, 'mens erger je niet', '2', 1980, NULL, '20 minuten', 'dasdasdasda');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `id` int(2) NOT NULL,
  `nickname` varchar(128) NOT NULL,
  `gamestatus` int(11) DEFAULT 1,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `player`
--

INSERT INTO `player` (`id`, `nickname`, `gamestatus`, `email`) VALUES
(1, 'jeffa', 1, 'jeffrey.agyei@hotmail.com'),
(2, 'Stephan', 1, 'jeffrey.agyei@hotmail.com'),
(3, 'jeff', 1, 'Jeffrey@hotmail.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(2) NOT NULL,
  `fname` varchar(128) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL DEFAULT '',
  `password` varchar(256) DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `mobile`, `password`) VALUES
(1, 'Jeffrey', 'Agyei', 'Jeffrey@hotmail.com', '624965655', '$2y$10$Fa96zQ.8MmUXUTLypDjsTeujGFTj335nlvVGtd//8DLIpGq/wubPC'),
(2, 'Aaron', 'Weggemans', 'aaron@14cd.nl', '0678459623', '$2y$10$z3wlFke5PpVWyl0/GKOfl.4rgmSGzvh.SjrNyJQMynK/GuR4P1PKO'),
(3, 'Rebien', 'dasdas', 'rebien@test.nl', '0678452365', '$2y$10$g5lOipAJ9c8rJevQsY5XwuGTa6YMlS9tYxlp3xZt50k.9Y61Abp4C'),
(4, 'Stephan', 'test', 'stephan@test.nl', '0674569632', '$2y$10$nKfof8PCzdpnovEef0y5luSt2Z4BzM4ZeDFg9RqSchIVCB1TELYse'),
(5, 'reb', 'reb', 'reb@reb.com', '', '$2y$10$j7aQgO9XT0OlNpZ.JHuu3eFoBlgBD53rWHF4MDa9KgeazV/7D.mjW'),
(6, 'Reb', 'reb', 'reb@reb.com', '', '$2y$10$JgFC9/DtnlEwcQfk.R1KSOtWmj53sG8CaeXCh6GDdZk5pxxoevKSm');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `battles`
--
ALTER TABLE `battles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gameid` (`gameid`),
  ADD KEY `playerid01` (`playerid01`,`playerid02`,`playerid03`,`playerid04`),
  ADD KEY `Userid02` (`playerid02`),
  ADD KEY `Userid03` (`playerid03`),
  ADD KEY `Userid04` (`playerid04`);

--
-- Indexen voor tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `battles`
--
ALTER TABLE `battles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `games`
--
ALTER TABLE `games`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `player`
--
ALTER TABLE `player`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `battles`
--
ALTER TABLE `battles`
  ADD CONSTRAINT `Game link` FOREIGN KEY (`gameid`) REFERENCES `games` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `Playerid01` FOREIGN KEY (`playerid01`) REFERENCES `player` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `Playerid02` FOREIGN KEY (`playerid02`) REFERENCES `player` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `Userid01` FOREIGN KEY (`playerid01`) REFERENCES `users` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `Userid02` FOREIGN KEY (`playerid02`) REFERENCES `users` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `Userid03` FOREIGN KEY (`playerid03`) REFERENCES `users` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `Userid04` FOREIGN KEY (`playerid04`) REFERENCES `users` (`id`) ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_users_id_fk` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
