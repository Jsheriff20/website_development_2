-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2019 at 11:07 PM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql1800367`
--

-- --------------------------------------------------------

--
-- Table structure for table `basketball_teams_website`
--

CREATE TABLE IF NOT EXISTS `basketball_teams_website` (
  `team_name` varchar(100) NOT NULL,
  `team_description` varchar(22222) NOT NULL,
  `image_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basketball_teams_website`
--

INSERT INTO `basketball_teams_website` (`team_name`, `team_description`, `image_link`) VALUES
('New York Knicks', 'The New York Knickerbockers, more commonly referred to as the Knicks, are an American professional basketball team based in the New York City borough of Manhattan.', '../images/new_york_knicks.jpg'),
('Miami Heat', 'The Miami Heat are an American professional basketball team based in Miami, Florida. The Heat compete in the National Basketball Association (NBA) as a member of the league''s Eastern Conference Southeast Division.', '../image/miami_heat.jpg'),
('', '', ''),
('Los Angelese Lakers', 'https://en.wikipedia.org/wiki/Los_Angeles_Lakers', '../image/los_angelese_lakers.jpg'),
('Minnesota Timberwolves', 'The Minnesota Timberwolves (also commonly known as the Wolves) are an American professional basketball team based in Minneapolis, Minnesota. The Timberwolves compete in the National Basketball Association (NBA) as a member club of the league''s Western Conference Northwest Division.', '../image/minnesota_timberwolves.jpg'),
('Oklahoma City Thunder', 'The Oklahoma City Thunder are an American professional basketball team based in Oklahoma City. The Thunder compete in the National Basketball Association (NBA) as a member of the league''s Western Conference Northwest Division.', '../image/oklahomba_city_thunder.jpg'),
('Houston Rockets', 'The Houston Rockets are an American professional basketball team based in Houston, Texas. The Rockets compete in he National Basketball Association (NBA) as a member of the league''s Western Conference Southwest Division. ', '../image/houston_rockets.jpg'),
('Golden State Warriors', 'The Golden State Warriors are an American professional basketball team based in San Francisco. The Warriors compete in the National Basketball Association (NBA), as a member of the league''s Western Conference Pacific Division. Founded in 1946 in Philadelphia.', '../image/golden_state_warriors.jpg'),
('Cleveland Cavaliers', 'The Cleveland Cavaliers, often referred to as the Cavs, are an American professional basketball team based in Cleveland, Ohio. The Cavs compete in the National Basketball Association (NBA) as a member of the league''s Eastern Conference Central Division. ', '../image/cleveland_caveliers.jpg'),
('Chicago Bulls', 'The Chicago Bulls are an American professional basketball team based in Chicago, Illinois. The Bulls compete in the National Basketball Association (NBA) as a member of the league''s Eastern Conference Central Division.', '../image/chicago_bulls.jpg'),
('Indiana Pacers', 'The Indiana Pacers are an American professional basketball team based in Indianapolis, Indiana. The Pacers compete in the National Basketball Association (NBA) as a member club of the league''s Eastern Conference Central Division.', '../image/indiana_pacers.jpg'),
('Toronto Raptors', 'The Toronto Raptors are a Canadian professional basketball team based in Toronto, Ontario. The Raptors compete in the National Basketball Association (NBA) as a member club of the league''s Eastern Conference Atlantic Division.', '../image/toronto_raptors.jpg'),
('Utah Jazz', 'The Utah Jazz are an American professional basketball team based in Salt Lake City, Utah. The Jazz compete in the National Basketball Association (NBA) as a member club of the league''s Western Conference, Northwest Division. ', '../image/utah_jazz.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
