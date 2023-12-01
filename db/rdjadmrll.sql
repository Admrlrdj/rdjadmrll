-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 03:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rdjadmrll`
--

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `id_club` int(11) NOT NULL,
  `id_country` int(11) NOT NULL,
  `id_confederation` int(11) NOT NULL,
  `name_club` varchar(255) NOT NULL,
  `code_club` varchar(3) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`id_club`, `id_country`, `id_confederation`, `name_club`, `code_club`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Real Madrid', 'RMA', '2023-11-20 10:01:27', '2023-11-20 10:01:27'),
(2, 1, 1, 'FC Barcelona', 'BAR', '2023-11-20 10:01:42', '2023-11-20 10:01:42'),
(3, 1, 1, 'Atletico de Madrid', 'ATM', '2023-11-20 10:01:56', '2023-11-20 10:01:56'),
(4, 1, 1, 'Real Sociedad', 'SOC', '2023-11-20 10:02:11', '2023-11-20 10:02:11'),
(5, 1, 1, 'Sevilla', 'SEV', '2023-11-20 10:02:20', '2023-11-20 10:02:20'),
(6, 1, 1, 'Real Betis', 'BET', '2023-11-20 10:02:35', '2023-11-20 10:02:35'),
(7, 1, 1, 'CA Osasuna', 'OSA', '2023-11-20 10:02:51', '2023-11-20 10:02:51'),
(8, 1, 1, 'Rayo Vallecano', 'RAY', '2023-11-20 10:03:08', '2023-11-20 10:03:08'),
(9, 1, 1, 'Athletic Club Bilbao', 'BIL', '2023-11-20 10:03:35', '2023-11-20 16:29:28'),
(10, 1, 1, 'Girona', 'GIR', '2023-11-20 10:03:48', '2023-11-20 10:03:48'),
(11, 1, 1, 'UD Las Palmas', 'UDL', '2023-11-20 10:11:42', '2023-11-20 10:11:42'),
(12, 1, 1, 'Valencia', 'VAL', '2023-11-20 10:11:57', '2023-11-20 10:11:57'),
(13, 1, 1, 'Getafe', 'GET', '2023-11-20 10:12:07', '2023-11-20 10:12:07'),
(14, 1, 1, 'Villareal', 'VIL', '2023-11-20 10:12:28', '2023-11-20 10:12:28'),
(15, 1, 1, 'Deportivo Alaves', 'ALA', '2023-11-20 10:13:44', '2023-11-20 10:13:44'),
(16, 1, 1, 'Cadiz CF', 'CAD', '2023-11-20 10:14:27', '2023-11-20 10:14:27'),
(17, 1, 1, 'Real Mallorca', 'MAL', '2023-11-20 10:14:47', '2023-11-20 10:14:47'),
(18, 1, 1, 'Celta de Vigo', 'CEL', '2023-11-20 10:16:24', '2023-11-20 10:16:24'),
(19, 1, 1, 'Granada', 'GRA', '2023-11-20 10:16:34', '2023-11-20 10:16:34'),
(20, 1, 1, 'Almeria', 'ALM', '2023-11-20 10:16:45', '2023-11-20 10:16:45'),
(21, 1, 1, 'Real Valladolid', 'RVA', '2023-11-20 16:02:52', '2023-11-20 16:02:52'),
(22, 1, 1, 'RCD Espanyol', 'RCD', '2023-11-20 16:03:06', '2023-11-20 16:03:06'),
(23, 1, 1, 'Elche', 'ELC', '2023-11-20 16:03:54', '2023-11-20 16:03:54'),
(25, 1, 1, 'Levante', 'LEV', '2023-11-20 16:04:13', '2023-11-20 16:04:13'),
(26, 1, 1, 'SD Huesca', 'HUE', '2023-11-20 16:04:41', '2023-11-20 16:04:41'),
(27, 1, 1, 'SD Eibar', 'EIB', '2023-11-20 16:05:12', '2023-11-20 16:05:12'),
(28, 1, 1, 'CD Leganes', 'LEG', '2023-11-20 16:05:33', '2023-11-20 16:05:33'),
(29, 2, 1, 'AFC Bournemouth', 'BOU', '2023-11-20 17:25:15', '2023-11-20 17:25:15'),
(30, 2, 1, 'Arsenal', 'ARS', '2023-11-20 17:25:22', '2023-11-20 17:25:22'),
(31, 2, 1, 'Aston Villa', 'ASV', '2023-11-20 17:25:38', '2023-11-20 17:25:38'),
(32, 2, 1, 'Brighton & Hove Albion', 'BHA', '2023-11-20 17:26:34', '2023-11-20 17:26:34'),
(33, 2, 1, 'Brentford', 'BRE', '2023-11-20 17:26:46', '2023-11-20 17:26:46'),
(34, 2, 1, 'Burnley', 'BUR', '2023-11-20 17:26:54', '2023-11-20 17:26:54'),
(35, 2, 1, 'Chelsea', 'CHE', '2023-11-20 17:27:04', '2023-11-20 17:27:04'),
(36, 2, 1, 'Crystal Palace', 'CRY', '2023-11-20 17:27:21', '2023-11-20 17:27:21'),
(37, 2, 1, 'Fulham', 'FUL', '2023-11-20 17:27:43', '2023-11-20 17:27:43'),
(38, 2, 1, 'Luton Town', 'LUT', '2023-11-20 17:27:57', '2023-11-20 17:27:57'),
(39, 2, 1, 'Manchester United', 'MUN', '2023-11-20 17:28:13', '2023-11-20 17:28:13'),
(40, 2, 1, 'Manchester City', 'MCI', '2023-11-20 17:28:23', '2023-11-20 17:28:23'),
(41, 2, 1, 'Newcastle United', 'NU', '2023-11-20 17:28:47', '2023-11-20 17:28:47'),
(42, 2, 1, 'Nottingham Forest', 'NFO', '2023-11-20 17:29:03', '2023-11-20 17:29:03'),
(43, 2, 1, 'Sheffield United', 'SHU', '2023-11-20 17:29:29', '2023-11-20 17:29:29'),
(44, 2, 1, 'Tottenham Hotspur', 'TOT', '2023-11-20 17:29:45', '2023-11-20 17:29:45'),
(45, 2, 1, 'Liverpool', 'LIV', '2023-11-20 17:29:58', '2023-11-20 17:29:58'),
(46, 2, 1, 'West Ham United', 'WHU', '2023-11-20 17:30:09', '2023-11-20 17:30:09'),
(47, 2, 1, 'Wolverhampton Wanderers', 'WOL', '2023-11-20 17:30:21', '2023-11-20 17:30:21'),
(48, 2, 1, 'Everton', 'EVE', '2023-11-20 17:30:33', '2023-11-20 17:30:33'),
(49, 2, 1, 'Leicester City', 'LEI', '2023-11-20 17:30:44', '2023-11-20 17:30:44'),
(50, 2, 1, 'Leeds United', 'LEE', '2023-11-20 17:30:53', '2023-11-20 17:30:53'),
(51, 2, 1, 'Southampton', 'SOU', '2023-11-20 17:31:00', '2023-11-20 17:31:00'),
(52, 2, 1, 'Watford', 'WAT', '2023-11-20 17:31:24', '2023-11-20 17:31:24'),
(53, 2, 1, 'Norwich City', 'NOR', '2023-11-20 17:31:33', '2023-11-20 17:31:33'),
(54, 2, 1, 'West Bromwich Albion', 'WBA', '2023-11-20 17:31:45', '2023-11-20 17:31:45'),
(55, 3, 1, 'Juventus', 'JUV', '2023-11-28 09:57:19', '2023-11-28 09:57:19'),
(56, 3, 1, 'Inter Milan', 'INT', '2023-11-28 09:57:46', '2023-11-28 09:58:09'),
(57, 3, 1, 'AC Milan', 'MIL', '2023-11-28 09:58:02', '2023-11-28 09:58:02'),
(58, 3, 1, 'SSC Napoli', 'NAP', '2023-11-28 09:58:20', '2023-11-28 09:58:20'),
(59, 3, 1, 'AS Roma', 'ROM', '2023-11-28 10:00:14', '2023-11-28 10:00:14'),
(60, 3, 1, 'Lazio', 'LAZ', '2023-11-28 10:00:23', '2023-11-28 10:00:23'),
(61, 3, 1, 'Fiorentina', 'FIO', '2023-11-28 10:00:31', '2023-11-28 10:00:31'),
(62, 3, 1, 'Bologna', 'BOL', '2023-11-28 10:00:46', '2023-11-28 10:00:46'),
(63, 3, 1, 'Atalanta', 'ATA', '2023-11-28 10:00:55', '2023-11-28 10:00:55'),
(64, 3, 1, 'AC Monza', 'MON', '2023-11-28 10:01:14', '2023-11-28 10:01:14'),
(65, 3, 1, 'Frosinose', 'FRO', '2023-11-28 10:01:32', '2023-11-28 10:01:32'),
(66, 3, 1, 'Torino', 'TOR', '2023-11-28 10:07:31', '2023-11-28 10:07:31'),
(67, 3, 1, 'US Lecce', 'LEC', '2023-11-28 10:07:49', '2023-11-28 10:07:49'),
(68, 3, 1, 'Sassuolo', 'SAS', '2023-11-28 10:08:07', '2023-11-28 10:08:07'),
(69, 3, 1, 'Genoa', 'GEN', '2023-11-28 10:08:19', '2023-11-28 10:08:19'),
(70, 3, 1, 'Udinese', 'UDI', '2023-11-28 10:08:27', '2023-11-28 10:08:27'),
(71, 3, 1, 'Cagliari', 'CAG', '2023-11-28 10:08:39', '2023-11-28 10:08:39'),
(72, 3, 1, 'Empoli', 'EMP', '2023-11-28 10:08:48', '2023-11-28 10:08:48'),
(73, 3, 1, 'Hellas Verona', 'VER', '2023-11-28 10:08:56', '2023-11-28 10:08:56'),
(74, 3, 1, 'Salernitana', 'SAL', '2023-11-28 10:09:04', '2023-11-28 10:09:04'),
(75, 3, 1, 'Spezia', 'SPE', '2023-11-28 10:10:19', '2023-11-28 10:10:19'),
(76, 3, 1, 'US Cremonese', 'CRE', '2023-11-28 10:10:33', '2023-11-28 10:10:33'),
(77, 3, 1, 'Sampdoria', 'SAM', '2023-11-28 10:12:20', '2023-11-28 10:12:20'),
(78, 3, 1, 'Venezia', 'VEN', '2023-11-28 10:13:07', '2023-11-28 10:13:07'),
(79, 3, 1, 'Benevento', 'BEN', '2023-11-28 10:13:22', '2023-11-28 10:13:22'),
(80, 3, 1, 'Crotone', 'CRO', '2023-11-28 10:13:31', '2023-11-28 10:13:31'),
(81, 3, 1, 'Parma', 'PAR', '2023-11-28 10:14:39', '2023-11-28 10:14:39'),
(82, 3, 1, 'Brescia', 'BRE', '2023-11-28 10:14:56', '2023-11-28 10:14:56'),
(83, 3, 1, 'SPAL', 'SPA', '2023-11-28 10:16:49', '2023-11-28 10:16:49'),
(84, 5, 1, 'Bayern Munchen', 'FCB', '2023-11-28 10:17:23', '2023-11-28 10:17:23'),
(85, 3, 1, 'Borussia Dortmund', 'DOR', '2023-11-28 10:17:32', '2023-11-28 10:59:19'),
(86, 5, 1, 'RB Leipzig', 'RBL', '2023-11-28 10:17:46', '2023-11-28 10:17:46'),
(87, 5, 1, 'Bayer Leverkusen', 'LEV', '2023-11-28 10:18:54', '2023-11-28 10:18:54'),
(88, 5, 1, 'VfB Stuttgart', 'VFB', '2023-11-28 10:19:19', '2023-11-28 10:19:19'),
(89, 5, 1, 'Hoffenheim', 'HOF', '2023-11-28 10:19:31', '2023-11-28 10:19:31'),
(90, 5, 1, 'Eintracht Frankfurt', 'FRA', '2023-11-28 10:25:52', '2023-11-28 10:25:52'),
(91, 5, 1, 'Wolfsburg', 'WOL', '2023-11-28 10:26:04', '2023-11-28 10:26:04'),
(92, 5, 1, 'Freiburg', 'FRE', '2023-11-28 10:26:12', '2023-11-28 10:26:12'),
(93, 5, 1, 'Augsburg', 'AUG', '2023-11-28 10:26:21', '2023-11-28 10:26:21'),
(94, 5, 1, 'Borussia Monchengladbach', 'BMG', '2023-11-28 10:27:17', '2023-11-28 10:27:17'),
(95, 5, 1, 'Werden Bremen', 'WBE', '2023-11-28 10:27:32', '2023-11-28 10:27:32'),
(96, 5, 1, 'Heidenheim', 'HEI', '2023-11-28 10:27:42', '2023-11-28 10:27:42'),
(97, 5, 1, 'VFL Bochum', 'BOC', '2023-11-28 10:27:54', '2023-11-28 10:27:54'),
(98, 5, 1, 'Darmstadt', 'DAR', '2023-11-28 10:28:04', '2023-11-28 10:28:04'),
(99, 5, 1, 'FSV Mainz 05', 'MAI', '2023-11-28 10:28:20', '2023-11-28 10:28:20'),
(100, 5, 1, 'Union Berlin', 'UBE', '2023-11-28 10:28:31', '2023-11-28 10:28:31'),
(101, 5, 1, 'Koln', 'KOL', '2023-11-28 10:28:36', '2023-11-28 10:28:36'),
(102, 5, 1, 'Schalke 04', 'SCH', '2023-11-28 10:28:59', '2023-11-28 10:28:59'),
(103, 5, 1, 'Hertha Berlin', 'HBE', '2023-11-28 10:29:07', '2023-11-28 10:29:07'),
(104, 5, 1, 'Arminia Bielefeld', 'BIE', '2023-11-28 10:41:55', '2023-11-28 10:41:55'),
(105, 5, 1, 'Greuther Furth', 'GFU', '2023-11-28 10:42:05', '2023-11-28 10:42:05'),
(106, 5, 1, 'Paderborn', 'PAD', '2023-11-28 10:42:49', '2023-11-28 10:42:49'),
(107, 5, 1, 'Fortuna Dusseldorf', 'FDU', '2023-11-28 10:43:00', '2023-11-28 10:43:00'),
(108, 4, 1, 'Paris Saint-Germain', 'PSG', '2023-11-28 10:43:16', '2023-11-28 10:43:16'),
(109, 4, 1, 'Olympique Marseille', 'OM', '2023-11-28 10:43:39', '2023-11-28 10:43:39'),
(110, 4, 1, 'Olympique Lyonnais', 'OL', '2023-11-28 10:43:55', '2023-11-28 10:43:55'),
(111, 4, 1, 'AS Monaco', 'ASM', '2023-11-28 10:44:06', '2023-11-28 10:44:06'),
(112, 4, 1, 'LOSC Lille', 'LIL', '2023-11-28 10:44:19', '2023-11-28 10:44:19'),
(113, 4, 1, 'OGC Nice', 'GYM', '2023-11-28 10:45:07', '2023-11-28 10:45:07'),
(114, 4, 1, 'Stade Reims', 'STR', '2023-11-28 10:45:18', '2023-11-28 10:45:18'),
(115, 4, 1, 'RC Lens', 'RCL', '2023-11-28 10:45:28', '2023-11-28 10:45:28'),
(116, 4, 1, 'Stade Brestois', 'STB', '2023-11-28 10:45:43', '2023-11-28 10:45:43'),
(117, 4, 1, 'Le Havre', 'HAV', '2023-11-28 10:46:09', '2023-11-28 10:46:09'),
(118, 4, 1, 'Metz', 'MET', '2023-11-28 10:46:27', '2023-11-28 10:46:27'),
(119, 4, 1, 'Stade Rennes', 'REN', '2023-11-28 10:46:45', '2023-11-28 10:46:45'),
(120, 4, 1, 'Nantes', 'NAN', '2023-11-28 10:46:53', '2023-11-28 10:46:53'),
(121, 4, 1, 'Strasbourg', 'STR', '2023-11-28 10:47:04', '2023-11-28 10:47:04'),
(122, 4, 1, 'Montpellier', 'MON', '2023-11-28 10:47:12', '2023-11-28 10:47:12'),
(123, 4, 1, 'Toulouse', 'TOU', '2023-11-28 10:47:24', '2023-11-28 10:47:24'),
(124, 4, 1, 'Lorient', 'LOR', '2023-11-28 10:47:37', '2023-11-28 10:47:37'),
(125, 4, 1, 'Clermont', 'CLE', '2023-11-28 10:47:43', '2023-11-28 10:47:43'),
(126, 4, 1, 'Auxerre', 'AUX', '2023-11-28 10:48:08', '2023-11-28 10:48:08'),
(127, 4, 1, 'AC Ajaccio', 'ACA', '2023-11-28 10:48:30', '2023-11-28 10:48:30'),
(128, 4, 1, 'ES Troyes', 'EST', '2023-11-28 10:48:46', '2023-11-28 10:48:46'),
(129, 4, 1, 'Angers', 'ANG', '2023-11-28 10:48:52', '2023-11-28 10:48:52'),
(130, 4, 1, 'Saint-Etienne', 'SAE', '2023-11-28 10:58:57', '2023-11-28 10:58:57'),
(131, 4, 1, 'Bordeaux', 'BOR', '2023-11-28 10:59:10', '2023-11-28 10:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `confederation`
--

CREATE TABLE `confederation` (
  `id_confederation` int(11) NOT NULL,
  `name_confederation` varchar(255) NOT NULL,
  `code_confederation` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `confederation`
--

INSERT INTO `confederation` (`id_confederation`, `name_confederation`, `code_confederation`, `created_at`, `updated_at`) VALUES
(1, 'Union of European Football Association', 'UEFA', '2023-11-20 09:54:57', '2023-11-20 09:55:28'),
(2, 'Asian Football Confederation', 'AFC', '2023-11-20 09:55:53', '2023-11-20 09:55:53'),
(3, 'Confederación Sudamericana de Fútbol', 'CONMEBOL', '2023-11-20 09:58:07', '2023-11-20 09:58:07'),
(4, 'Confederation of North, Central American, and Caribbean Association Football', 'CONCACAF', '2023-11-20 09:59:07', '2023-11-20 09:59:07'),
(5, 'Confederation of African Football', 'CAF', '2023-11-20 09:59:21', '2023-11-20 09:59:21'),
(6, 'Oceanian Football Confederation', 'OFC', '2023-11-20 09:59:35', '2023-11-20 09:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id_country` int(11) NOT NULL,
  `id_confederation` int(11) NOT NULL,
  `name_country` varchar(255) NOT NULL,
  `code_country` varchar(3) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id_country`, `id_confederation`, `name_country`, `code_country`, `created_at`, `updated_at`) VALUES
(1, 1, 'Spain', 'ESP', '2023-11-20 09:59:48', '2023-11-20 10:00:42'),
(2, 1, 'England', 'ENG', '2023-11-20 09:59:54', '2023-11-20 10:00:49'),
(3, 1, 'Italy', 'ITA', '2023-11-20 10:00:02', '2023-11-20 10:00:52'),
(4, 1, 'France', 'FRA', '2023-11-20 10:00:09', '2023-11-20 10:00:55'),
(5, 1, 'Germany', 'GER', '2023-11-20 10:00:16', '2023-11-20 10:00:59'),
(6, 3, 'Argentina', 'ARG', '2023-11-20 10:20:47', '2023-11-20 10:20:47'),
(7, 1, 'Portugal', 'POR', '2023-11-20 10:20:54', '2023-11-20 10:20:54'),
(8, 1, 'Belgium', 'BEL', '2023-11-20 10:21:02', '2023-11-20 10:21:02'),
(9, 3, 'Brazil', 'BRA', '2023-11-20 10:21:09', '2023-11-20 10:21:09'),
(10, 4, 'United States', 'USA', '2023-11-20 10:21:22', '2023-11-20 10:21:22'),
(11, 5, 'Morocco', 'MAR', '2023-11-20 10:21:37', '2023-11-20 10:21:37'),
(12, 2, 'Japan', 'JAP', '2023-11-20 10:21:45', '2023-11-20 10:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('1','2','3','4') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `telp` varchar(12) NOT NULL,
  `jenkel` enum('1','2') NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `role`, `tgl_lahir`, `telp`, `jenkel`, `created_at`, `updated_at`) VALUES
(1, 'Radja Admiral', 'owner', '1', '1', '2006-02-06', '089531807064', '1', '2023-11-01 09:16:14', '2023-11-01 15:25:49'),
(2, 'Dela Elsa', 'warga', '1', '4', '2006-03-18', '085175206261', '2', '2023-11-02 11:35:35', '2023-11-02 11:35:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id_club`),
  ADD KEY `id_country` (`id_country`,`id_confederation`);

--
-- Indexes for table `confederation`
--
ALTER TABLE `confederation`
  ADD PRIMARY KEY (`id_confederation`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id_country`),
  ADD KEY `id_confederation` (`id_confederation`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `id_club` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `confederation`
--
ALTER TABLE `confederation`
  MODIFY `id_confederation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id_country` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
