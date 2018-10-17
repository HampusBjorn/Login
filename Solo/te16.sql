-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 17 okt 2018 kl 11:12
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
(1, 'Vart vill jag gå?\r\n\r\nOBS! skriv något av de fetstilade sakerna så går du dit eller interagera med den saken!', 'Rummet är väll upplyst. Du kan se <b>folk</b> som dansar i mitten av rumet, längst back i rummet så finns det en dörr, på dörren står det <b>sovrum</b>.'),
(2, 'vart vill jag gå?', 'Du Kommer in i sovrummet och ser en <b>säng</b>, ett <b>badrum</b> och en <b>garderob</b>'),
(3, 'Du känner dig lite nervös för det är många vackra kvinnor på dans golvet', 'Folk dansar runt dig och är glada. Du funderar om du ska <b>dansa</b> med dem, <b>stå</b> kvar eller om du ska gå till <b>sovrum</b>met'),
(4, 'Sängen ser så mysig ut men ska jag undersöka ljudet?', 'Sängen ser väldigt mysig ut och man blir väldigt sugen på att <b>sova</b> när man ser den, men du hör ett ljud från <b>badrum</b>met.'),
(5, 'zZzZzZz', 'sängen är väldigt mjuk och bara en kort stund efter du lagt dig i sängen så somnar du. du blev mördad medans du sov av en okänd person! vill du <b>börja om</b>?'),
(6, 'Hmm, den där lådan ser väldigt mystisk ut men bör jag värkligen rota i lådan?', 'Garderoben är väldigt mörk men ljuset från sovrumet speglar sig på en medel stor låda längst bak i garderoben vill du <b>undersöka</b> lådan eller gå till backa till <b>sovrum</b>met'),
(7, 'du blir orolig att dågot hemskt har hänt men samtidigt så blir du rädd', 'Inne i badrummet så luktar det väldigt konstigt, du ser en lång mörk figur i badkaret du ser blod som rinner ner i avloppet från badkaret, dörren bakom dig stängs. vill du <b>undersöka</b> badkaret eller vill du försöka öppna <b>dörren</b>?'),
(8, 'Ahhhhhhhhh!', 'Du rycker i dörren. Den öppnas inte, du rycker igen men denna gång hör du ett ljud bakom dig. Du vänder dig om och den långa svarta figuren står rakt bakom dig. figuren lyfter sin arm och kör in sina klor i ditt hjärta. Du dör direkt! vill du <b>börja om</b>?'),
(9, 'Du känner din puls höjas och adrenalinet pumpa! Men du är vettskrämd', 'Du ser att det är ett sovande monster som ligger i badkaret, monstret har väldigt långa klor och du känner att monstret är en fara förr alla på festen. Vill du försöka <b>slås</b> mot monstret eller fly mot <b>dörren</b>'),
(10, 'Ahhhhhh!', 'Monstret vaknar och du missar ditt slag! monstret kör in sina klor i ditt hjärta och du dör. Vill du <b>börja om</b>?'),
(11, 'Vad fan ska jag göra med det här svärdet!', 'I lådan så finns det en stor kniv! Nästan så man kan kalla det ett svärd. Vill du <b>ta upp</b> svärdet eller <b>lämna</b> det?'),
(12, 'Du känner kraften från svärdet i din kropp, du känner hur dina muskler växer!', 'Du tar upp svärdet! vart ska du gå med svärdet? gå till <b>sovrum</b>'),
(13, 'du känner att makten från svärdet bara blir kraftigare', 'Du Kommer in i sovrummet och ser en <b>säng</b>, ett <b>badrum</b> och en <b>garderob</b>'),
(14, 'Va gör jag här?', 'Här finns det inget kvar! gå tillbaka till <b>sovrum</b>met'),
(15, 'Sängen ser så mysig ut men ska jag undersöka ljudet?', 'Sängen ser väldigt mysig ut och man blir väldigt sugen på att <b>sova</b> när man ser den, men du hör ett ljud från <b>badrum</b>met.'),
(16, 'du blir orolig att dågot hemskt har hänt men samtidigt så blir du rädd', 'Inne i badrummet så luktar det väldigt konstigt, du ser en lång mörk figur i badkaret du ser blod som rinner ner i avloppet från badkaret, dörren bakom dig stängs. vill du <b>undersöka</b> badkaret eller vill du försöka öppna <b>dörren</b>?'),
(18, 'Du känner din puls höjas och adrenalinet pumpa! Men du är vettskrämd', 'Du ser att det är ett sovande monster som ligger i badkaret, monstret har väldigt långa klor och du känner att monstret är en fara förr alla på festen. Vill du försöka <b>slås</b> mot monstret eller fly mot <b>dörren</b>'),
(19, 'Yeeeeeey!', 'Du räddar alla på festen! alla hyllar dig för din prestation! doktorn lyckas göra ett botemedel åt violettas sjukdom från monstrets blod och du vinner detta spel!! GRATTIS!!!!!\r\n<br>\r\n<br>\r\n<b>börja om</b>\r\n'),
(20, 'Jag blir så excited av alla dessa thots!', 'Thots svärmar dig från alla håll och kanter, en av dem frågar om du vill förlja med henne därifrån? <b>följ</b> med eller <b>stanna</b>'),
(21, 'Gud vad min mage låter!', 'Du står där, efter ett tag blir du hungring men du är fast bestämd att du ska stå kvar där så du svälter ihjäl. <b>börja om</b>'),
(22, 'Nej!!! kom tillbaka tänker jag!', 'Alla thots hör dig och lämnar dig,\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\ndu får en hjärt attack och dör!<br>\r\n<b>börja om</b>\r\n'),
(23, 'känslorna för henne växer och du tänker att hon kanske inte är en thot ändå.', 'Du följer med hem till henne, ni pratar och du får veta att hennes namn är violetta. hon frågar om du vill ha en drink, <b>ja</b> eller <b>nej</b>'),
(24, 'Be gone THOT!', 'Du dricker drinken och den var riktigt god men efter ett kort tag så blir du yr. Violetta den jäkla thoten hade spätsat drinken!\r\n<br>\r\nDu dör av överdos!\r\n<b>börja om</b>'),
(25, 'HIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHI<br>HIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHI<br>HIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHI<br>HIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHI<br>HIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHI<br>HIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHI<br>HIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHI<br>HIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHIHI<br>HIHIHIHIHIHIHIHIHIHIHIHIHIHI', 'Ni har en trevlig kväll och du känner hur violetta får mer och mer känslor, ni bestämer att ni ska sova och ses dagen därpå. <b>fortsätt</b>.'),
(26, 'I\'m so excited, and I just can\'t hide it <br>\r\nI\'m about to lose control and I think I like it ', 'du sover och dagen efter kliver du upp, du tar på dig din finaste kostym och berger dig mot violettas hem. <br>\r\n<b>fortsätt</b>'),
(27, '♥ ♥ ♥ ♥ ♥ ♥ ♥ ♥ ♥ ♥ ♥ ♥ ♥ ♥', 'Du kommer hem till violetta! Ni pratar ett jätte länge och ni bestämmer att ni ska testa på att ha ett förhålande, hon berättar efteråt att hon är döende och inte har lång tid kvar vid liv. vad vill du göra <b>skratta</b> eller <b>hjälp</b>'),
(28, 'Why did I do this?', 'Violetta tar illa upp och tar fram en kniv. Hon hugger dig i hjärtat och du dör.\r\n<br>\r\n<b>börja om</b>'),
(29, 'Hmmm vart är det mest troligt att man kant hitta ett läkemedel :|', 'Du spenderar dina dagar att söka efter ett  botemedel, du har fått ett tips om vart det kan finnas ett botemedel, Dina ledtrådar leder till <b>festen</b> och <b>apotek</b>'),
(30, 'Detta kanske inte var det smartaste men kan det varit det bästa? tänker du', 'Du står vid ingången till festen. gå <b>tillbaka</b> eller gå till <b>sovrum</b>met'),
(31, 'varför händer det här mig!!', 'Du hittar inget och violetta dör. <br>\r\nDitt hjärta blir förkrossat och kort därpå så tar du självmord.\r\n<br>\r\n<b>börja om</b>');

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
(5, 1, 2, 'sovrum'),
(6, 1, 3, 'folk'),
(7, 2, 4, 'säng'),
(8, 2, 7, 'badrum'),
(9, 2, 6, 'garderob'),
(10, 3, 2, 'sovrum'),
(14, 4, 7, 'badrum'),
(15, 4, 5, 'sova'),
(16, 5, 1, 'börja om'),
(17, 6, 2, 'sovrum'),
(19, 8, 1, 'börja om'),
(20, 7, 8, 'dörren'),
(21, 7, 9, 'undersöka'),
(22, 9, 8, 'dörren'),
(23, 9, 10, 'slås'),
(24, 10, 1, 'börja om'),
(25, 6, 11, 'undersöka'),
(26, 11, 6, 'lämna'),
(27, 11, 12, 'ta upp'),
(28, 12, 13, 'sovrum'),
(29, 13, 14, 'garderob'),
(30, 13, 16, 'badrum'),
(31, 13, 15, 'säng'),
(32, 14, 13, 'sovrum'),
(33, 15, 5, 'sova'),
(34, 15, 16, 'badrum'),
(35, 16, 8, 'dörren'),
(36, 16, 18, 'undersöka'),
(37, 18, 8, 'dörren'),
(38, 18, 19, 'slås'),
(39, 19, 1, 'börja om'),
(40, 3, 20, 'dansa'),
(41, 3, 21, 'stå'),
(42, 21, 1, 'börja om'),
(43, 20, 22, 'stanna'),
(44, 20, 23, 'följ'),
(45, 22, 1, 'börja om'),
(46, 23, 24, 'ja'),
(47, 23, 25, 'nej'),
(48, 25, 26, 'fortsätt'),
(49, 26, 27, 'fortsätt'),
(50, 27, 28, 'skratta'),
(51, 27, 29, 'hjälp'),
(52, 28, 1, 'börja om'),
(53, 29, 30, 'festen'),
(54, 29, 31, 'apotek'),
(55, 31, 1, 'börja om'),
(56, 30, 29, 'tillbaka'),
(57, 30, 2, 'sovrum'),
(58, 24, 1, 'börja om');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT för tabell `story`
--
ALTER TABLE `story`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT för tabell `storylinks`
--
ALTER TABLE `storylinks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
