-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 27 okt 2025 om 16:40
-- Serverversie: 10.6.22-MariaDB-0ubuntu0.22.04.1
-- PHP-versie: 8.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `123456_projectweek`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `DigitaleVondsten`
--

CREATE TABLE `DigitaleVondsten` (
  `id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `beschrijving` text DEFAULT NULL,
  `gevonden_op` date DEFAULT NULL,
  `bestand_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `DigitaleVondsten`
--

INSERT INTO `DigitaleVondsten` (`id`, `titel`, `type`, `beschrijving`, `gevonden_op`, `bestand_url`) VALUES
(1, 'Eerste Instagram Post', 'social post', 'Een wazige foto van een koffie, gepost op Instagram in 2010 – één van de eerste sociale beelden van de 21e eeuw.', '2125-03-12', 'https://futureheritage.org/vondsten/insta1.jpg'),
(2, 'HTML Startpagina', 'website', 'Een eenvoudige HTML-pagina met knipperende tekst en een gif-achtergrond, typerend voor de vroege internetjaren.', '2125-03-14', 'https://futureheritage.org/vondsten/startpagina.html'),
(3, 'Meme: Distracted Boyfriend', 'meme', 'Een populaire internetmeme uit 2017 die menselijke relaties parodieerde met stockfoto’s.', '2125-03-15', 'https://futureheritage.org/vondsten/distracted.jpg'),
(4, 'TikTok Dansvideo', 'video', 'Korte dansvideo met trending muziek uit 2020. Veel bekeken en gedeeld door jongeren.', '2125-03-16', 'https://futureheritage.org/vondsten/tiktokdance.mp4'),
(5, 'Twitter Bericht: Eerste Tweet', 'social post', 'Het allereerste bericht op Twitter: \"just setting up my twttr\" – een digitaal artefact van online communicatie.', '2125-03-17', 'https://futureheritage.org/vondsten/tweet1.png'),
(6, 'YouTube Clip: “Charlie bit my finger”', 'video', 'Een virale video uit 2007 die humor en huiselijke momenten toonde, symbool van vroege virale cultuur.', '2125-03-18', 'https://futureheritage.org/vondsten/charlie.mp4'),
(7, 'CSS Stylesheet', 'codefragment', 'Een oud stylesheet dat laat zien hoe websites in 2020 werden vormgegeven met flexbox en gradients.', '2125-03-19', 'https://futureheritage.org/vondsten/style2020.css'),
(8, 'Forum Post: MySpace Tips', 'social post', 'Een reeks berichten met tips om je MySpace-profiel te versieren, een sociaal platform vóór Facebook.', '2125-03-20', 'https://futureheritage.org/vondsten/myspace.txt'),
(9, 'Nieuwsartikel: Internet Blackout 2024', 'website', 'Een krantenartikel over een grote internetstoring die miljoenen gebruikers trof in 2024.', '2125-03-21', 'https://futureheritage.org/vondsten/blackout.html'),
(10, 'AI Chat Transcript', 'codefragment', 'Een gesprek met een vroeg AI-model dat laat zien hoe mens en machine begonnen te communiceren.', '2125-03-22', 'https://futureheritage.org/vondsten/ai_chat.txt');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `DigitaleVondsten`
--
ALTER TABLE `DigitaleVondsten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `DigitaleVondsten`
--
ALTER TABLE `DigitaleVondsten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
