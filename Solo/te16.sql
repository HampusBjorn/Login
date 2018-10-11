-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 11 okt 2018 kl 10:23
-- Serverversion: 10.1.29-MariaDB
-- PHP-version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `te16`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`) VALUES
(1, 'benne', '$2y$10$AmW0zLr5K21xcYaHxlqMquu7X4XL1NDRgA8/RCp183EAvD5kbq5bi', 'benjamin@nej.se');

-- --------------------------------------------------------

--
-- Tabellstruktur `story`
--

CREATE TABLE `story` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `plats` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `story`
--

INSERT INTO `story` (`id`, `text`, `plats`) VALUES
(1, 'Ta saken?', 'festen'),
(2, 'ta saken?', 'sovrum');

-- --------------------------------------------------------

--
-- Tabellstruktur `storylinks`
--

CREATE TABLE `storylinks` (
  `id` int(10) UNSIGNED NOT NULL,
  `storyid` int(10) UNSIGNED NOT NULL,
  `target` int(10) UNSIGNED NOT NULL,
  `text` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `storylinks`
--

INSERT INTO `storylinks` (`id`, `storyid`, `target`, `text`) VALUES
(1, 1, 2, 'ja'),
(2, 1, 2, 'nej'),
(3, 2, 1, 'ja'),
(4, 2, 2, 'nej');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `storylinks`
--
ALTER TABLE `storylinks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `storyid` (`storyid`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT för tabell `story`
--
ALTER TABLE `story`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT för tabell `storylinks`
--
ALTER TABLE `storylinks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
