-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2026 at 10:57 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escape-room`
--

-- --------------------------------------------------------

--
-- Table structure for table `riddles`
--

DROP TABLE IF EXISTS `riddles`;
CREATE TABLE IF NOT EXISTS `riddles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `riddle` varchar(255) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `hint` varchar(255) DEFAULT NULL,
  `roomId` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `riddles`
--

INSERT INTO `riddles` (`id`, `riddle`, `answer`, `hint`, `roomId`) VALUES
(1, 'Ik strek me uit, maar ga nergens heen, Met deuren vol geheimen, één voor één. Je loopt over mij, keer op keer, Ik leid je verder, telkens weer. Wat ben ik?', 'Een gang', 'Je staat er al in.', 1),
(2, 'Ik hang hier stil en zeg geen woord, Maar toon je gezicht zoals het hoort. In smalle paden help ik zien, Maar wat je ziet… is misschien niet wat het lijkt. Wat ben ik?', 'Een spiegel', 'Je kan je eigen reflectie door mij zien.', 1),
(3, 'Ik sta tussen hier en daar, Gesloten of open, altijd klaar. Draai me links of draai me rechts, Zonder mij kom je nergens echt. Wat ben ik?', 'Een deur', 'Je moet er doorheen om verder te gaan.', 1),
(4, 'Wat is de 4-cijferige toegangscode?', '05121926', 'De kalender vertelt de dagen, maar de mok vertelt de waarheid.', 2),
(5, 'Alleen als je mij recht in de ogen kijkt, zie je de waarheid die achter je ligt.', '5415', 'Een spiegel laat je niet zien wat er in de spiegen zit, maar wat er voor staat. Wat bevindt zich precies achter je rug als je in de spiegel kijkt?', 2),
(6, 'Ik heb geen stem, maar vertel je wanneer het einde nabij was. Mijn wijzers bewogen voor het laatste toen de laatste bewoner de deur dichttrok\r\n', '10:12', 'Kijk goed naar de details in de kamer. Niet alles wat kapot is, is waardeloos. Sommige objecten zijn bevroren op het belangrijkste moment van de dag.', 2),
(7, 'Op de muur staat: 16 → 4, 12 → 3, 8 → 2 ? →> ?. In de kamer vind je een tandwiel met het getal 20 erin gekrast. Een briefje zegt: \"De tijd werd niet gestopt… hij werd verkleind.\"', '5', 'Combineer wat je op de muur ziet met het getal dat je ergens anders in de kamer vindt', 3),
(8, '\"Wacht niet op de zon, maar volg het pad van de lantaarn buiten. Het licht valt achtereenvolgens op de plekken waar de meester zijn gereedschap liet vallen.', '3 - 7 - 1', 'Volg het licht. De volgorde is de sleutel', 3),
(9, '\"De lift komt pas in beweging als het gewicht exact is.\r\nDe Slinger weegt 15 kg.\r\nHet Gewicht weegt het dubbele van de slinger.\r\nHet Tandwiel weegt de helft van de slinger.\r\nWat is het totale gewicht van één Slinger, één Gewicht en één Tandwiel?\"', '525', 'Vergeet niet, de tijd draait door en alles heeft zijn gewicht.', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
