-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 07 nov 2018 om 13:04
-- Serverversie: 10.2.8-MariaDB
-- PHP-versie: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `S1122010_barista`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) unsigned NOT NULL,
  `postid` int(11) DEFAULT NULL,
  `comment` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `comments`
--

INSERT INTO `comments` (`id`, `postid`, `comment`) VALUES
(1, 1, 'Ristretto coffee java doppio, seasonal con panna at a organic. Café au lait, as aromatic acerbic cream extra beans bar whipped so cultivar.'),
(2, 1, 'Ristretto coffeedoppio, seasonal con panna at a organic. Café au lait, as aromatic acerbic cream extra beans bar whipped so cultivar.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(150) NOT NULL DEFAULT '',
  `description` varchar(1250) DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `posts`
--

INSERT INTO `posts` (`id`, `name`, `description`) VALUES
(1, 'great brizillian coffee', 'Strong wings in as grounds chicory galão redeye french press cortado sugar. Mug spoon ristretto foam aroma iced to go redeye extra kopi-luwak. Lungo latte decaffeinated, con panna caffeine half and half organic lungo. Steamed, wings seasonal fair trade rich that con panna organic.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `recipees`
--

CREATE TABLE IF NOT EXISTS `recipees` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(250) DEFAULT NULL,
  `step01` varchar(250) DEFAULT NULL,
  `ingredient01` varchar(250) DEFAULT NULL,
  `step02` varchar(250) DEFAULT NULL,
  `ingredient02` varchar(250) DEFAULT NULL,
  `step03` varchar(250) DEFAULT NULL,
  `ingredient03` varchar(250) DEFAULT NULL,
  `step04` varchar(250) DEFAULT NULL,
  `ingredient04` varchar(250) DEFAULT NULL,
  `step05` varchar(250) DEFAULT NULL,
  `ingredient05` varchar(250) DEFAULT NULL,
  `step06` varchar(250) DEFAULT NULL,
  `ingredient06` varchar(250) DEFAULT '',
  `timeToPrep` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `recipees`
--

INSERT INTO `recipees` (`id`, `name`, `description`, `step01`, `ingredient01`, `step02`, `ingredient02`, `step03`, `ingredient03`, `step04`, `ingredient04`, `step05`, `ingredient05`, `step06`, `ingredient06`, `timeToPrep`) VALUES
(1, 'Cappocinno Brazilian', 'This dark full flavoured cappocino is perfect after a juicy steak', 'slowly bring the milk to a heat of 60degree celsius, use a whisker to create the perfect layer of foam', 'milk 50ml', 'Bring the water to a temprature of 85degrees celsius and use your machine to create the coffee', 'water 150ml', 'distibute the coffee clearly over the compressor for the fine tast.', 'brazillian darkroast 50gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Cappocinno Brazilian', 'This dark full flavoured cappocino is perfect after a juicy steak', 'slowly bring the milk to a heat of 60degree celsius, use a whisker to create the perfect layer of foam', 'milk 50ml', 'Bring the water to a temprature of 85degrees celsius and use your machine to create the coffee', 'water 150ml', 'distibute the coffee clearly over the compressor for the fine tast.', 'brazillian dark roast 60gr', NULL, NULL, NULL, NULL, NULL, '', '61'),
(11, 'Wesley Smith', 'In soluta esse est nostrum accusamus quae architecto quo dicta nihil commodo architecto quis optio in exercitationem ut ut', 'Aliquam iste quia dolore voluptas esse error cillum ducimus velit placeat architecto nesciunt hic dolorem eum amet ut distinctio Sunt', 'Vitae harum hic enim dolor et ut quasi expedita temporibus aute quia', 'Qui ut molestiae ea consectetur natus soluta maiores consequat Fugit dolor magna est nobis cum facilis', 'Quis ut reprehenderit voluptatem nulla rerum possimus voluptas est deserunt laborum aut qui', 'Minim ipsa ad at cum illum dolor', 'Rerum tempor excepteur eaque nobis officia sed quis tenetur corporis debitis omnis non facilis quidem eius magni Nam ad', NULL, NULL, NULL, NULL, NULL, '', '31'),
(12, 'Talon Taylor', 'Magnam adipisicing labore nesciunt amet sit pariatur Consectetur proident ipsum quia anim nihil labore fuga', 'Nihil sequi reiciendis non et corrupti libero amet rerum voluptatibus ut fuga Impedit consectetur impedit ullam minus magna inventore', 'Eu temporibus aut quia vero do aspernatur odio velit eum dolores porro', 'Obcaecati similique qui minim voluptatem Est molestiae sint commodi tempore', 'At voluptas consequuntur ipsam ea fugit autem eaque corporis', 'Molestiae laudantium minim nostrud ex accusamus quidem dolores ut deserunt et fugiat itaque adipisci duis id', 'Eius adipisci dolor qui dicta natus nostrud quia voluptate aut veniam laborum accusamus', NULL, NULL, NULL, NULL, NULL, '', '39'),
(13, 'Quentin Wood', 'Voluptate commodi recusandae Iste aut vitae mollitia molestias omnis ut assumenda provident veniam quam laboris itaque dolorem minim', 'Quaerat vel non rerum mollit laudantium proident sequi tempor est explicabo Labore accusamus magni dolores et dolorum officia', 'Praesentium voluptas consequatur animi est voluptate odit aperiam veniam necessitatibus perspiciatis quam nostrud eos iure praesentium', 'Voluptatum quis dolore exercitation provident numquam non obcaecati quia eveniet qui nemo placeat illum sunt aliquam mollit sapiente ducimus', 'Modi corrupti minim rerum laborum nihil aut minima fugiat a repellendus Consequat Molestiae exercitationem autem ea', 'Odit voluptas accusamus eu veniam sunt consequatur Explicabo Error quidem sed sit et culpa', 'Recusandae Dolorem at tenetur nostrud et quis earum praesentium non ut aliquid fugiat voluptatem', NULL, NULL, NULL, NULL, NULL, '', '16'),
(14, 'Grace Stevens', 'Aut in consequuntur officia magnam deserunt tempore cupidatat', 'Aliquip perspiciatis magna mollit dolor vero dolor minima ratione et similique', 'In atque magna enim laborum', 'Dolore molestiae quae minim asperiores mollitia aut', 'Laborum Quo nisi laboriosam nostrud ad sapiente est eius sed dolores qui tenetur nobis inventore cumque aliquip adipisci aut dolore', 'Unde aut voluptas quis suscipit irure nemo et ipsum molestiae', 'Pariatur Mollitia laboris harum quae quia et id a porro laborum Itaque laborum corporis velit duis cumque excepteur eveniet nisi', NULL, NULL, NULL, NULL, NULL, '', '60'),
(15, 'Vivian Sexton', 'Reprehenderit molestiae quo iste qui irure nisi excepteur est pariatur Inventore voluptatibus ex consectetur accusamus est doloremque consequatur', 'Nihil odio incidunt itaque quibusdam voluptatibus Nam nesciunt exercitationem sint laboris id earum ut non occaecat perspiciatis incididunt', 'Perspiciatis nulla sint sed et accusantium et animi necessitatibus dolor eu veniam fugiat culpa nisi unde sed qui doloribus accusantium', 'Animi est illum pariatur Aut aut quam dolor ut reiciendis quibusdam reiciendis neque officia', 'Doloremque est eaque commodo dolore nulla optio libero corporis natus architecto voluptate deleniti quia ut nisi dolore labore necessitatibus voluptatem', 'Quidem commodo officia optio officia sit pariatur', 'In esse pariatur Debitis voluptas ullamco corporis non ullam corporis architecto dolorem quasi ducimus minus debitis', NULL, NULL, NULL, NULL, NULL, '', '92'),
(16, 'Allistair Strong', 'Sunt non quis eum voluptatibus placeat pariatur Eos dignissimos eum praesentium dolores laborum Id accusantium', 'Debitis nesciunt esse commodo sint minus ipsum obcaecati id voluptas voluptates ut anim non nobis et non dolor qui magna', 'Enim iure veritatis aliquid est ut voluptate doloremque quibusdam pariatur Rerum dolore omnis', 'Veniam sit aut quibusdam mollitia similique et dicta ut est in voluptatem', 'Veritatis sunt nostrum voluptatem est ipsum autem dolorum aut laborum Eaque natus deleniti at nisi quod sed et commodi omnis', 'Illum omnis dicta sit perspiciatis enim voluptate eos impedit eu similique officiis odio duis nostrud', 'Laboriosam voluptatem odio voluptatem est ratione tempora sed dolorem veniam est quisquam magni atque beatae', NULL, NULL, NULL, NULL, NULL, '', '60'),
(17, 'Hermione Franklin', 'Et optio autem hic nihil ratione alias vel incididunt error duis in est tenetur doloremque', 'Ratione repudiandae voluptate sed qui irure', 'Dolor expedita hic doloribus error ex ipsa mollitia rerum', 'Est maxime quis tempore ab officia quaerat exercitation excepturi earum dolorem libero ipsa quidem nostrud quia expedita anim', 'Praesentium quia in veniam voluptatem dolorem reprehenderit voluptas error commodo minima qui voluptas saepe', 'Facilis id in vel similique nulla repudiandae in mollit aliquid repellendus Neque omnis provident laudantium sed magni repudiandae', 'Earum dolor quos at libero consectetur ut vero et dolorum quo sapiente nesciunt et lorem qui cumque facere ut', NULL, NULL, NULL, NULL, NULL, '', '70');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'user');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(200) NOT NULL DEFAULT '',
  `mobile` varchar(20) DEFAULT NULL,
  `password` varchar(100) NOT NULL DEFAULT '',
  `roleid` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `mobile`, `password`, `roleid`) VALUES
(2, 'Stephan', 'Hoeksema', 's.hoeksema@windesheimflevoland.nl', '0641612525', 'ietsie!0*0', 1),
(3, 'test', 'testo', 'test@test.nl', '23513512', '$2y$10$yd8jVbd5HgNUHP0gHKZ4GuEN8pk6OnYPESjpvO0OlMyDEjjjd1fvG', NULL),
(4, 'reb', 'reb', 'reb@reb.com', '235532', '$2y$10$41DOXiRjzQycTv2wF3cFZurTsAB.vr7OLcGzfX6LEEuDbaLJrBseW', NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `recipees`
--
ALTER TABLE `recipees`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT voor een tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `recipees`
--
ALTER TABLE `recipees`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT voor een tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
