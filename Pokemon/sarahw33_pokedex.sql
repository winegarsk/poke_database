-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2018 at 04:54 PM
-- Server version: 5.6.36-82.1-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarahw33_pokedex`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`sarahw33`@`localhost` PROCEDURE `addGym` (IN `pid` INT(255), IN `pname` VARCHAR(255), IN `pleader` VARCHAR(255), IN `pdifficulty` VARCHAR(255))  NO SQL
BEGIN
SET TRANSACTION ISOLATION LEVEL SERIALIZABLE;
START TRANSACTION;
	INSERT INTO Gym (id, name, leader, difficulty)
    VALUES(pid, pname, pleader, pdifficulty);
	COMMIT;
END$$

CREATE DEFINER=`sarahw33`@`localhost` PROCEDURE `addTrainer` (IN `pname` VARCHAR(255), IN `phometown` VARCHAR(255), IN `pnumPokemon` INT(11), IN `p_pokeballs` INT(11))  BEGIN
SET TRANSACTION ISOLATION LEVEL SERIALIZABLE;
START TRANSACTION;
	INSERT INTO Trainer (name, hometown, numPokemon, pokeballs)    VALUES(pname, phometown, pnumPokemon, p_pokeballs);
	COMMIT;
END$$

CREATE DEFINER=`sarahw33`@`localhost` PROCEDURE `add_a_pokemon` (IN `p_name` VARCHAR(255), IN `p_type` VARCHAR(255), IN `p_str` INT(10), IN `p_rarity` VARCHAR(255))  NO SQL
BEGIN
SET TRANSACTION ISOLATION LEVEL SERIALIZABLE;
START TRANSACTION;
	INSERT INTO Pokemon (name, type, str, rarity) VALUES(p_name, p_type, p_str, p_rarity);
	COMMIT;
END$$

--
-- Functions
--
CREATE DEFINER=`sarahw33`@`localhost` FUNCTION `leader_gym` (`leader_id` INT(11), `gym_id` INT(11)) RETURNS VARCHAR(255) CHARSET utf8 NO SQL
BEGIN
  RETURN (SELECT * FROM Leader INNER JOIN Leader.gym ON Gym.leader WHERE id = leader_id );
END$$

CREATE DEFINER=`sarahw33`@`localhost` FUNCTION `yourPokeballs` (`id` INT(10)) RETURNS INT(11) NO SQL
BEGIN
  RETURN (SELECT sum(pokeballs) FROM Trainer WHERE id = id);
END$$

CREATE DEFINER=`sarahw33`@`localhost` FUNCTION `yourPokemon` (`id` INT(11)) RETURNS INT(11) BEGIN
  RETURN (SELECT sum(numPokemon) FROM Trainer WHERE id = id);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `City`
--

CREATE TABLE `City` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `gym` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `City`
--

INSERT INTO `City` (`id`, `name`, `region`, `gym`) VALUES
(1, 'Pallet Town', 'Kanto', 'none'),
(2, 'Lavender Town', 'Kanto', 'lavender gym'),
(3, 'Viridian City', 'Kanto', 'Viridian Gym'),
(4, 'Saffron City', 'Kanto', 'Saffron City Gym'),
(5, 'Celadon City', 'Kanto', 'Celadon City Gym'),
(6, 'Cerulean City', 'Kanto ', 'Cerulean City Gym'),
(7, 'Pewter City ', 'Kanto ', 'Pewter City Gym'),
(8, 'Fuchsia City ', 'Kanto ', 'Fuchsia City Gym'),
(9, 'Indigo Plateau', 'Kanto ', 'Elite Four Gym '),
(10, 'New Bark Town ', 'Johto', 'none'),
(11, 'Cherry Grove City', 'Johto', 'none'),
(12, 'Violet City ', 'Johto', 'Violet City Gym'),
(13, 'Azalea Town ', 'Johto', 'Azalea Town Gym'),
(14, 'Olivine City', 'Johto', 'Olivine City Gym'),
(15, 'Cianwood City', 'Johto ', 'Cianwood City Gym'),
(16, 'Mahogany City', 'Johto', 'Mahogany City Gym '),
(17, 'Blackthorn City', 'Johto ', 'Blackthorn City Gym'),
(18, 'Littleroot Town ', 'Hoenn', 'none'),
(19, 'Oldale Town ', 'Hoenn', 'none'),
(20, 'Petalburg City', 'Hoenn', 'Petalburg City Gym'),
(21, 'Rustboro City ', 'Hoenn', 'Rustboro City Gym'),
(22, 'Dewford Town', 'Hoenn', 'Dewford Town Gym'),
(23, 'Slateport City', 'Hoenn', 'Slateport City Gym'),
(24, 'Mauville City ', 'Hoenn', 'Mauville City Gym'),
(25, 'Verdanturf Town ', 'Hoenn', 'Verdanturf Town Gym'),
(26, 'Fallarbor Town ', 'Hoenn', 'Fallarbor Town Gym'),
(27, 'Lavaridge Town ', 'Hoenn', 'Lavaridge Town Gym'),
(28, 'Fortree City ', 'Hoenn ', 'Fortree City Gym '),
(29, 'Lilycove City ', 'Hoenn ', 'Lilycove City Gym'),
(30, 'Mossdeep City ', 'Hoenn', 'Mossdeep City Gym '),
(31, 'Sootopolis City ', 'Hoenn', 'Sootopolis City Gym '),
(32, 'Pacifidlog Town ', 'Hoenn', 'Pacifidlog Town Gym '),
(33, 'Ever Grande City ', 'Hoenn', 'Elite Four Gym '),
(34, 'Twinleaf City ', 'Sinnoh', 'none'),
(35, 'Sandgem Town ', 'Sinnoh', 'Sandgem Town Gym'),
(36, 'Jubilife City ', 'Sinnoh ', 'Jubilife City Gym '),
(37, 'Floaroma Town ', 'Sinnoh', 'Floaroma Town Gym '),
(38, 'Eterna City ', 'Sinnoh ', 'Eterna City Gym '),
(39, 'Hearthhome Town ', 'Sinnoh', 'Hearthhome Town gym '),
(40, 'Pastoria City ', 'Sinnoh ', 'Pastoria City Gym '),
(41, 'Snowpoint City ', 'Sinnoh ', 'Snowpoint City Gym '),
(42, 'Sunyshore City ', 'Sinnoh ', 'Sunyshore City Gym '),
(43, 'Pokemon League', 'Sinnoh', 'Elite Four Gym ');

-- --------------------------------------------------------

--
-- Table structure for table `Gym`
--

CREATE TABLE `Gym` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `leader` varchar(255) NOT NULL,
  `difficulty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Gym`
--

INSERT INTO `Gym` (`id`, `name`, `leader`, `difficulty`) VALUES
(2, 'vermillion city ', 'lt.surge', 'easy '),
(3, 'celadon city ', 'erika', 'easy '),
(17, 'goldenrod city', 'Whitney', 'hard'),
(18, 'pewter city', 'brock', 'easy'),
(19, 'Fuchsia City ', 'koga', 'medium'),
(20, 'saffron city', 'sabrina', 'medium'),
(21, 'Cinnabar Island', 'Blaine', 'medium'),
(22, 'Viridian City', 'Giovanni', 'Hard');

-- --------------------------------------------------------

--
-- Stand-in structure for view `join_npc_on_trainer`
-- (See below for the actual view)
--
CREATE TABLE `join_npc_on_trainer` (
`t_name` varchar(255)
,`t_Pokemon` int(10)
,`npc_name` varchar(255)
,`npcPokemon` int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `Leader`
--

CREATE TABLE `Leader` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gym` varchar(255) NOT NULL,
  `diff` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Leader`
--

INSERT INTO `Leader` (`id`, `name`, `gym`, `diff`) VALUES
(1, 'Brock', 'Pewter City', 'easy'),
(2, 'Misty', 'Cerulean City ', 'easy '),
(3, 'Lt. Surge', 'Vermillion City', 'easy '),
(4, 'Erika', 'Celadon City ', 'easy'),
(5, 'Koga', 'Fuchsia City ', 'easy '),
(6, 'Sabrina', 'Saffron City ', 'med'),
(7, 'Blaine', 'Cinnabar Island', 'med'),
(8, 'Giovanni ', 'Viridian City ', 'hard '),
(9, 'Falkner', 'Violet City ', 'easy '),
(12, 'Whitney', 'Goldenrod', 'Hard');

-- --------------------------------------------------------

--
-- Table structure for table `Legendary`
--

CREATE TABLE `Legendary` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `rarity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Legendary`
--

INSERT INTO `Legendary` (`id`, `name`, `type`, `rarity`) VALUES
(2, 'ho-oh', 'flying', 'rare'),
(3, 'Zapdos', 'Lightning', 'very rare'),
(5, 'Mew-two', 'psychic', 'very rare');

-- --------------------------------------------------------

--
-- Table structure for table `Npc`
--

CREATE TABLE `Npc` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `region` varchar(100) NOT NULL,
  `job` varchar(255) NOT NULL,
  `numPokemon` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Npc`
--

INSERT INTO `Npc` (`id`, `name`, `region`, `job`, `numPokemon`) VALUES
(1, 'Joy', 'Kanto', 'Nurse', 3),
(2, 'Oak', 'Kanto ', 'Professor', 3),
(5, 'Lance', 'Kanto', 'Champion', 6);

-- --------------------------------------------------------

--
-- Table structure for table `Pokemon`
--

CREATE TABLE `Pokemon` (
  `id` int(3) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `str` int(11) DEFAULT NULL,
  `rarity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Pokemon`
--

INSERT INTO `Pokemon` (`id`, `name`, `type`, `str`, `rarity`) VALUES
(18, 'Ditto', 'normal ', 2, 'common'),
(19, 'Snorlax', 'normal ', 4, 'uncommon'),
(20, 'Charmander', 'fire', 4, 'common'),
(21, 'Bulbasaur', 'leaf', 4, 'common'),
(22, 'Squirtle', 'water', 4, 'common'),
(23, 'Mew-two', 'psychic', 10, 'extremely rare'),
(24, 'Eeve', 'normal', 4, 'common'),
(25, 'Gardevoir', 'fairy', 6, 'rare'),
(26, 'Mew', 'psychic', 10, 'extremely rare'),
(27, 'jiggly puff', 'fairy', 6, 'rare'),
(28, 'Dragonite', 'dragon', 8, 'uncommon'),
(29, 'Gengar', 'ghost', 5, 'rare'),
(30, 'magicarp', 'water', 2, 'common'),
(31, 'Jynx', 'psychic', 5, 'uncommon'),
(32, 'koffing', 'poison', 7, 'uncommon'),
(33, 'celebi', 'fairy', 10, 'extremely rare'),
(34, 'lugia', 'flying', 10, 'extremely rare'),
(35, 'Ampharos', 'electric', 10, 'common');

-- --------------------------------------------------------

--
-- Table structure for table `Trainer`
--

CREATE TABLE `Trainer` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hometown` varchar(255) NOT NULL,
  `pokeballs` varchar(255) NOT NULL,
  `numPokemon` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Trainer`
--

INSERT INTO `Trainer` (`id`, `name`, `hometown`, `pokeballs`, `numPokemon`) VALUES
(15, 'Josh', 'Hanahan', '9', 3),
(16, 'Mark', 'Cerulean', '8', 4),
(18, 'Phil', 'Cerulean', '2', 3),
(19, 'Kit', 'Pewter City', '6', 4),
(20, 'Schlesh', 'Fuchsia City', '5', 5),
(22, 'Ricky ', 'Celadon City ', '3', 4),
(23, 'Jack', 'Saffron City ', '5', 6),
(24, 'Nate', 'Lavender Town ', '6', 6),
(25, 'James', 'Pallet Town ', '6', 6),
(39, 'Sage', 'Pallet Town', '4', 6),
(41, 'Chloe', 'Goldenrod City ', '3', 5),
(45, 'Jo', 'Fuchsia City', '9', 6);

--
-- Triggers `Trainer`
--
DELIMITER $$
CREATE TRIGGER `pokeLimit_before_insert` BEFORE INSERT ON `Trainer` FOR EACH ROW BEGIN
 IF new.numPokemon > 6  THEN
 	SET new.numPokemon = 6; 
 END IF; 
 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `trainer_on_city`
-- (See below for the actual view)
--
CREATE TABLE `trainer_on_city` (
`gym` varchar(255)
,`l_name` varchar(255)
,`t_name` varchar(255)
,`hometown` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `join_npc_on_trainer`
--
DROP TABLE IF EXISTS `join_npc_on_trainer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sarahw33`@`localhost` SQL SECURITY DEFINER VIEW `join_npc_on_trainer`  AS  select `Trainer`.`name` AS `t_name`,`Trainer`.`numPokemon` AS `t_Pokemon`,`Npc`.`name` AS `npc_name`,`Npc`.`numPokemon` AS `npcPokemon` from (`Trainer` join `Npc` on((`Trainer`.`numPokemon` = `Npc`.`numPokemon`))) ;

-- --------------------------------------------------------

--
-- Structure for view `trainer_on_city`
--
DROP TABLE IF EXISTS `trainer_on_city`;

CREATE ALGORITHM=UNDEFINED DEFINER=`sarahw33`@`localhost` SQL SECURITY DEFINER VIEW `trainer_on_city`  AS  select `Leader`.`gym` AS `gym`,`Leader`.`name` AS `l_name`,`Trainer`.`name` AS `t_name`,`Trainer`.`hometown` AS `hometown` from (`Leader` join `Trainer` on((`Leader`.`gym` = `Trainer`.`hometown`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `City`
--
ALTER TABLE `City`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Gym`
--
ALTER TABLE `Gym`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Leader`
--
ALTER TABLE `Leader`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `Legendary`
--
ALTER TABLE `Legendary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Npc`
--
ALTER TABLE `Npc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Pokemon`
--
ALTER TABLE `Pokemon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Trainer`
--
ALTER TABLE `Trainer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `City`
--
ALTER TABLE `City`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `Gym`
--
ALTER TABLE `Gym`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `Leader`
--
ALTER TABLE `Leader`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `Legendary`
--
ALTER TABLE `Legendary`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Npc`
--
ALTER TABLE `Npc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Pokemon`
--
ALTER TABLE `Pokemon`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `Trainer`
--
ALTER TABLE `Trainer`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
