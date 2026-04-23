-- phpMyAdmin SQL Dump
-- version 5.2.3-1.fc43
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2026 at 07:57 AM
-- Server version: 10.11.16-MariaDB
-- PHP Version: 8.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `beoordeling` int(11) NOT NULL,
  `moeilijkheid` int(11) NOT NULL,
  `review_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riddles`
--

CREATE TABLE `riddles` (
  `id` int(11) NOT NULL,
  `riddle` varchar(255) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `hint` varchar(255) DEFAULT NULL,
  `roomId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `riddles`
--

INSERT INTO `riddles` (`id`, `riddle`, `answer`, `hint`, `roomId`) VALUES
(1, 'Welke Pokémon is nummer 25 in de Pokédex?', 'Pikachu', 'Het is de mascotte van Pokémon.', 1),
(2, 'Wat is het type van Charmander?', 'Vuur', 'Denk aan zijn vlammende staart.', 1),
(3, 'Hoe heet de evolutie van Bulbasaur?', 'Ivysaur', 'Het zit tussen Bulbasaur en Venusaur.', 1),
(4, 'Wat is de 4-cijferige toegangscode?', '5121926', 'De kalender vertelt de dagen, maar de mok vertelt de waarheid.', 2),
(5, 'Alleen als je mij recht in de ogen kijkt, zie je de waarheid die achter je ligt.', '5415', 'Een spiegel laat je niet zien wat er in de spiegen zit, maar wat er voor staat. Wat bevindt zich precies achter je rug als je in de spiegel kijkt?', 2),
(6, 'Een lade met gereedschap. Er liggen 3 schroevendraaiers, 5 tandwielen en 2 pincetten. Op de bodem van de lade staat gekrast: S x T + P.\r\n', '22', 'Tel de hulpmiddelen en volg de krabbels op de bodem.', 2),
(7, 'Op de muur staat: 16 ? 4, 12 ? 3, 8 ? 2 ? ?> ?. In de kamer vind je een tandwiel met het getal 20 erin gekrast. Een briefje zegt: \"De tijd werd niet gestopt… hij werd verkleind.\"', '5', 'Combineer wat je op de muur ziet met het getal dat je ergens anders in de kamer vindt', 3),
(8, '\"Wacht niet op de zon, maar volg het pad van de lantaarn buiten. Het licht valt achtereenvolgens op de plekken waar de meester zijn gereedschap liet vallen.', '173', 'Volg het licht. De volgorde is de sleutel', 3),
(9, '\"De lift komt pas in beweging als het gewicht exact is.\r\nDe Slinger weegt 0,75 kg.\r\nHet Gewicht weegt het dubbele van de slinger.\r\nHet Tandwiel weegt de helft van de slinger.\r\nWat is het totale gewicht van één Slinger, één Gewicht en één Tandwiel?\"', '3', 'Vergeet niet, de tijd draait door en alles heeft zijn gewicht.', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riddles`
--
ALTER TABLE `riddles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `riddles`
--
ALTER TABLE `riddles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
