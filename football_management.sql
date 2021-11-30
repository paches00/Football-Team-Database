-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 05:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football management`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_type`) VALUES
(0, 'penalty');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `hobby_id` int(11) NOT NULL,
  `hobby_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `match`
--

CREATE TABLE `match` (
  `season_id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `1_team_id` int(11) NOT NULL,
  `2_team_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(20) NOT NULL,
  `score` varchar(6) NOT NULL,
  `penalty` varchar(20) DEFAULT NULL,
  `extra_time` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `occupation_type`
--

CREATE TABLE `occupation_type` (
  `occupation_type_id` int(11) NOT NULL,
  `occupation_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` int(11) NOT NULL,
  `current_team_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `height_in_cm` float NOT NULL,
  `weight_in_kg` float NOT NULL,
  `current_position_id` int(11) NOT NULL,
  `previous_positions` varchar(30) NOT NULL,
  `previous_clubs_id` int(33) NOT NULL,
  `matches_club_level` int(11) NOT NULL,
  `matches_international_level` int(11) NOT NULL,
  `address_home_ground` varchar(30) NOT NULL,
  `player_type_id` int(11) NOT NULL,
  `salary` float NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `additional_conditions` varchar(40) NOT NULL,
  `occupation_type_id` int(11) NOT NULL,
  `institution_name` varchar(30) NOT NULL,
  `hobby_id` int(11) NOT NULL,
  `away_expenses_sum` float NOT NULL,
  CHECK (date_of_birth <= DATEADD(year,-18,CURRENT_DATE)) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `player_events`
--

CREATE TABLE `player_events` (
  `match_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `minute` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `player_performance`
--

CREATE TABLE `player_performance` (
  `match_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `started_on_bench` tinyint(1) NOT NULL,
  `substituted` tinyint(1) NOT NULL,
  `attempts` int(11) NOT NULL,
  `attempts_on_target` int(11) NOT NULL,
  `successful_passes` int(11) NOT NULL,
  `failed_passes` int(11) NOT NULL,
  `tackles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `player_type`
--

CREATE TABLE `player_type` (
  `player_type_id` int(11) NOT NULL,
  `player_type_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `position_type`
--

CREATE TABLE `position_type` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE `seasons` (
  `season_id` int(11) NOT NULL,
  `season_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `country` varchar(30) NOT NULL,
  `coach` varchar(30) NOT NULL,
  `player_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `team_list`
--

CREATE TABLE `team_list` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `event_type` (`event_type`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`hobby_id`);

--
-- Indexes for table `match`
--
ALTER TABLE `match`
  ADD PRIMARY KEY (`match_id`) USING BTREE,
  ADD UNIQUE KEY `season_id` (`season_id`),
  ADD UNIQUE KEY `1_team_id` (`1_team_id`,`2_team_id`),
  ADD KEY `2_team_id` (`2_team_id`);

--
-- Indexes for table `occupation_type`
--
ALTER TABLE `occupation_type`
  ADD PRIMARY KEY (`occupation_type_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`),
  ADD UNIQUE KEY `hobby_id` (`hobby_id`),
  ADD UNIQUE KEY `current_team_id` (`current_team_id`),
  ADD UNIQUE KEY `current_position_id` (`current_position_id`),
  ADD UNIQUE KEY `previous_clubs_id` (`previous_clubs_id`),
  ADD UNIQUE KEY `player_type_id` (`player_type_id`),
  ADD UNIQUE KEY `occupation_type_id` (`occupation_type_id`),
  ADD KEY `first_name` (`first_name`,`surname`),
  ADD KEY `date_of_birth` (`date_of_birth`,`height_in_cm`),
  ADD KEY `salary` (`salary`,`end_date`);

--
-- Indexes for table `player_events`
--
ALTER TABLE `player_events`
  ADD UNIQUE KEY `event_id` (`event_id`),
  ADD UNIQUE KEY `match_id` (`match_id`,`player_id`),
  ADD KEY `player_id` (`player_id`);

--
-- Indexes for table `player_performance`
--
ALTER TABLE `player_performance`
  ADD PRIMARY KEY (`match_id`),
  ADD UNIQUE KEY `player_id` (`player_id`);

--
-- Indexes for table `player_type`
--
ALTER TABLE `player_type`
  ADD PRIMARY KEY (`player_type_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD UNIQUE KEY `position_id` (`position_id`),
  ADD UNIQUE KEY `player_id` (`player_id`);

--
-- Indexes for table `position_type`
--
ALTER TABLE `position_type`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`season_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD UNIQUE KEY `team_id` (`team_id`),
  ADD KEY `country` (`country`);

--
-- Indexes for table `team_list`
--
ALTER TABLE `team_list`
  ADD PRIMARY KEY (`team_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `match`
--
ALTER TABLE `match`
  ADD CONSTRAINT `match_ibfk_1` FOREIGN KEY (`match_id`) REFERENCES `player_performance` (`match_id`),
  ADD CONSTRAINT `match_ibfk_2` FOREIGN KEY (`1_team_id`) REFERENCES `team_list` (`team_id`),
  ADD CONSTRAINT `match_ibfk_3` FOREIGN KEY (`2_team_id`) REFERENCES `team_list` (`team_id`),
  ADD CONSTRAINT `match_ibfk_4` FOREIGN KEY (`season_id`) REFERENCES `seasons` (`season_id`);

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`current_position_id`) REFERENCES `position_type` (`position_id`),
  ADD CONSTRAINT `player_ibfk_2` FOREIGN KEY (`current_team_id`) REFERENCES `team_list` (`team_id`),
  ADD CONSTRAINT `player_ibfk_3` FOREIGN KEY (`previous_clubs_id`) REFERENCES `team_list` (`team_id`),
  ADD CONSTRAINT `player_ibfk_4` FOREIGN KEY (`player_type_id`) REFERENCES `player_type` (`player_type_id`),
  ADD CONSTRAINT `player_ibfk_5` FOREIGN KEY (`occupation_type_id`) REFERENCES `occupation_type` (`occupation_type_id`),
  ADD CONSTRAINT `player_ibfk_6` FOREIGN KEY (`hobby_id`) REFERENCES `hobbies` (`hobby_id`);

--
-- Constraints for table `player_events`
--
ALTER TABLE `player_events`
  ADD CONSTRAINT `player_events_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`),
  ADD CONSTRAINT `player_events_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`),
  ADD CONSTRAINT `player_events_ibfk_3` FOREIGN KEY (`match_id`) REFERENCES `player_performance` (`match_id`);

--
-- Constraints for table `player_performance`
--
ALTER TABLE `player_performance`
  ADD CONSTRAINT `player_performance_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`);

--
-- Constraints for table `position`
--
ALTER TABLE `position`
  ADD CONSTRAINT `position_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`),
  ADD CONSTRAINT `position_ibfk_2` FOREIGN KEY (`position_id`) REFERENCES `position_type` (`position_id`);

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `team_list` (`team_id`);
COMMIT;

--
-- Create view 'player_performance'
--
CREATE VIEW player_performance
AS 
SELECT 
    *
FROM
    Match_Events, Player_Performance, Match, Events;

--
-- Create view 'player_administration'
--
CREATE VIEW player_administration
AS 
SELECT 
  *
FROM
    Teams_List, Player_Type, Occupation_Type, Hobbies, Seasons, Events;

--
-- Create view 'team_coordination'
--
CREATE VIEW team_coordination
AS 
SELECT 
    *
FROM
    Team, Match, Teams_List;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
