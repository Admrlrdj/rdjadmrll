-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 07:32 AM
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
-- Table structure for table `bundesliga1920`
--

CREATE TABLE `bundesliga1920` (
  `id_bundesliga1920` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bundesliga2021`
--

CREATE TABLE `bundesliga2021` (
  `id_bundesliga2021` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bundesliga2122`
--

CREATE TABLE `bundesliga2122` (
  `id_bundesliga2122` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bundesliga2223`
--

CREATE TABLE `bundesliga2223` (
  `id_bundesliga2223` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bundesliga2324`
--

CREATE TABLE `bundesliga2324` (
  `id_bundesliga2324` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(54, 2, 1, 'West Bromwich Albion', 'WBA', '2023-11-20 17:31:45', '2023-11-20 17:31:45');

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
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `id_final` int(11) NOT NULL,
  `code_final` varchar(2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `final`
--

INSERT INTO `final` (`id_final`, `code_final`, `created_at`, `updated_at`) VALUES
(1, 'F1', '2023-11-20 10:20:24', '2023-11-20 10:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id_group` int(11) NOT NULL,
  `code_group` varchar(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id_group`, `code_group`, `created_at`, `updated_at`) VALUES
(1, 'A', '2023-11-20 10:17:47', '2023-11-20 10:19:09'),
(2, 'B', '2023-11-20 10:19:11', '2023-11-20 10:19:11'),
(3, 'C', '2023-11-20 10:19:13', '2023-11-20 10:19:13'),
(4, 'D', '2023-11-20 10:19:14', '2023-11-20 10:19:14'),
(5, 'E', '2023-11-20 10:19:16', '2023-11-20 10:19:16'),
(6, 'F', '2023-11-20 10:19:18', '2023-11-20 10:19:18'),
(7, 'G', '2023-11-20 10:19:20', '2023-11-20 10:19:20'),
(8, 'H', '2023-11-20 10:19:23', '2023-11-20 10:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `laliga1920`
--

CREATE TABLE `laliga1920` (
  `id_laliga1920` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `laliga1920`
--

INSERT INTO `laliga1920` (`id_laliga1920`, `id_club`, `play`, `win`, `draw`, `lose`, `goal_in`, `goal_out`, `goal_diff`, `points`, `created_at`, `updated_at`) VALUES
(1, 1, 38, 26, 9, 3, 70, 25, 45, 87, '2023-11-20 15:55:39', '2023-11-20 16:24:02'),
(2, 2, 38, 25, 7, 6, 86, 38, 48, 82, '2023-11-20 16:21:34', '2023-11-20 16:24:46'),
(3, 3, 38, 18, 16, 4, 51, 27, 24, 70, '2023-11-20 16:21:39', '2023-11-20 16:25:12'),
(4, 5, 38, 19, 13, 6, 54, 34, 20, 70, '2023-11-20 16:21:46', '2023-11-20 16:25:27'),
(5, 14, 38, 18, 6, 14, 63, 49, 14, 60, '2023-11-20 16:21:58', '2023-11-20 16:25:40'),
(6, 4, 38, 16, 8, 14, 56, 48, 8, 56, '2023-11-20 16:22:03', '2023-11-20 16:27:39'),
(7, 19, 38, 16, 8, 14, 52, 45, 7, 56, '2023-11-20 16:22:08', '2023-11-20 16:27:02'),
(8, 13, 38, 14, 12, 12, 43, 37, 6, 54, '2023-11-20 16:22:13', '2023-11-20 16:24:35'),
(9, 12, 38, 14, 11, 13, 46, 53, -7, 53, '2023-11-20 16:22:20', '2023-11-20 16:27:22'),
(10, 7, 38, 13, 13, 12, 46, 54, -8, 52, '2023-11-20 16:22:30', '2023-11-20 16:27:54'),
(11, 9, 38, 13, 12, 13, 41, 38, 3, 51, '2023-11-20 16:22:37', '2023-11-20 16:25:57'),
(12, 25, 38, 14, 7, 17, 47, 53, -6, 49, '2023-11-20 16:22:42', '2023-11-20 16:28:10'),
(13, 21, 38, 9, 15, 14, 32, 43, -11, 42, '2023-11-20 16:22:49', '2023-11-20 16:28:22'),
(14, 27, 38, 11, 9, 18, 39, 56, -17, 42, '2023-11-20 16:22:57', '2023-11-20 16:28:32'),
(15, 6, 38, 10, 11, 17, 48, 60, -12, 41, '2023-11-20 16:23:03', '2023-11-20 16:28:45'),
(16, 15, 38, 10, 9, 19, 34, 59, -25, 39, '2023-11-20 16:23:07', '2023-11-20 16:26:51'),
(17, 18, 38, 7, 16, 15, 37, 49, -12, 37, '2023-11-20 16:23:11', '2023-11-20 16:26:28'),
(18, 28, 38, 8, 12, 18, 30, 51, -21, 36, '2023-11-20 16:23:19', '2023-11-20 16:26:39'),
(19, 17, 38, 9, 6, 23, 40, 65, -25, 33, '2023-11-20 16:23:26', '2023-11-20 16:26:14'),
(20, 22, 38, 5, 10, 23, 27, 58, -31, 25, '2023-11-20 16:23:33', '2023-11-20 16:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `laliga2021`
--

CREATE TABLE `laliga2021` (
  `id_laliga2021` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `laliga2021`
--

INSERT INTO `laliga2021` (`id_laliga2021`, `id_club`, `play`, `win`, `draw`, `lose`, `goal_in`, `goal_out`, `goal_diff`, `points`, `created_at`, `updated_at`) VALUES
(1, 1, 38, 25, 9, 4, 67, 28, 39, 84, '2023-11-20 15:54:49', '2023-11-20 16:43:20'),
(2, 3, 38, 26, 8, 4, 67, 25, 42, 86, '2023-11-20 16:18:20', '2023-11-20 16:43:42'),
(3, 2, 38, 24, 7, 7, 85, 38, 47, 79, '2023-11-20 16:18:32', '2023-11-20 16:44:05'),
(4, 4, 38, 17, 11, 10, 59, 38, 21, 62, '2023-11-20 16:18:37', '2023-11-20 16:44:17'),
(5, 5, 38, 24, 5, 9, 53, 33, 20, 77, '2023-11-20 16:18:41', '2023-11-20 16:44:27'),
(6, 6, 38, 17, 10, 11, 50, 50, 0, 61, '2023-11-20 16:18:45', '2023-11-20 16:44:43'),
(7, 7, 38, 11, 11, 16, 37, 48, -11, 44, '2023-11-20 16:18:49', '2023-11-20 16:44:56'),
(8, 9, 38, 11, 13, 14, 46, 42, 4, 46, '2023-11-20 16:19:05', '2023-11-20 16:45:10'),
(9, 12, 38, 10, 13, 15, 50, 53, -3, 43, '2023-11-20 16:19:47', '2023-11-20 16:45:27'),
(10, 13, 38, 9, 11, 18, 36, 57, -21, 38, '2023-11-20 16:19:53', '2023-11-20 16:45:39'),
(11, 15, 38, 9, 11, 18, 36, 57, -21, 38, '2023-11-20 16:19:59', '2023-11-20 16:45:52'),
(12, 14, 38, 15, 13, 10, 60, 44, 16, 58, '2023-11-20 16:20:05', '2023-11-20 16:46:03'),
(13, 16, 38, 11, 11, 16, 36, 58, -22, 44, '2023-11-20 16:20:12', '2023-11-20 16:46:11'),
(14, 18, 38, 14, 11, 13, 55, 57, -2, 53, '2023-11-20 16:20:21', '2023-11-20 16:46:27'),
(15, 19, 38, 13, 7, 18, 47, 65, -18, 46, '2023-11-20 16:20:38', '2023-11-20 16:46:41'),
(16, 21, 38, 5, 16, 17, 34, 57, -23, 31, '2023-11-20 16:20:43', '2023-11-20 16:46:50'),
(17, 27, 38, 6, 12, 20, 29, 52, -23, 30, '2023-11-20 16:20:49', '2023-11-20 16:47:01'),
(18, 26, 38, 7, 13, 18, 34, 53, -19, 34, '2023-11-20 16:20:54', '2023-11-20 16:47:12'),
(19, 23, 38, 8, 12, 18, 34, 55, -21, 36, '2023-11-20 16:21:03', '2023-11-20 16:47:23'),
(20, 25, 38, 9, 14, 15, 46, 57, -11, 41, '2023-11-20 16:21:13', '2023-11-20 16:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `laliga2122`
--

CREATE TABLE `laliga2122` (
  `id_laliga2122` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `laliga2122`
--

INSERT INTO `laliga2122` (`id_laliga2122`, `id_club`, `play`, `win`, `draw`, `lose`, `goal_in`, `goal_out`, `goal_diff`, `points`, `created_at`, `updated_at`) VALUES
(1, 1, 38, 26, 8, 4, 80, 31, 49, 86, '2023-11-20 15:55:50', '2023-11-20 16:48:36'),
(2, 19, 38, 8, 14, 16, 44, 61, -17, 38, '2023-11-20 16:08:40', '2023-11-20 16:49:21'),
(3, 25, 38, 8, 11, 19, 51, 76, -25, 35, '2023-11-20 16:08:45', '2023-11-20 16:49:49'),
(4, 15, 38, 8, 7, 23, 31, 65, -34, 31, '2023-11-20 16:08:52', '2023-11-20 16:49:31'),
(5, 14, 38, 16, 11, 11, 63, 37, 26, 59, '2023-11-20 16:09:00', '2023-11-20 16:50:10'),
(6, 2, 38, 21, 10, 7, 68, 38, 30, 73, '2023-11-20 16:15:32', '2023-11-20 16:52:35'),
(7, 3, 38, 21, 8, 9, 65, 43, 22, 71, '2023-11-20 16:15:37', '2023-11-20 16:52:51'),
(8, 4, 38, 17, 11, 10, 40, 37, 3, 62, '2023-11-20 16:15:42', '2023-11-20 16:53:41'),
(9, 5, 38, 18, 16, 4, 53, 30, 23, 70, '2023-11-20 16:15:47', '2023-11-20 16:53:06'),
(10, 6, 38, 19, 8, 11, 62, 40, 22, 65, '2023-11-20 16:15:53', '2023-11-20 16:53:21'),
(11, 7, 38, 12, 11, 15, 37, 51, -14, 47, '2023-11-20 16:15:58', '2023-11-20 16:56:28'),
(12, 8, 38, 11, 9, 18, 39, 50, -11, 42, '2023-11-20 16:16:03', '2023-11-20 16:57:01'),
(13, 9, 38, 14, 13, 11, 43, 36, 7, 55, '2023-11-20 16:16:07', '2023-11-20 16:54:03'),
(14, 12, 38, 11, 15, 12, 48, 53, -5, 48, '2023-11-20 16:16:23', '2023-11-20 16:54:33'),
(15, 13, 38, 8, 15, 15, 33, 41, -8, 39, '2023-11-20 16:16:35', '2023-11-20 16:54:58'),
(16, 16, 38, 8, 15, 15, 35, 51, -16, 39, '2023-11-20 16:16:42', '2023-11-20 16:56:40'),
(17, 17, 38, 10, 9, 19, 36, 63, -27, 39, '2023-11-20 16:16:51', '2023-11-20 16:57:20'),
(18, 18, 38, 12, 10, 16, 43, 43, 0, 46, '2023-11-20 16:16:57', '2023-11-20 16:57:33'),
(19, 22, 38, 10, 12, 16, 40, 53, -13, 42, '2023-11-20 16:17:52', '2023-11-20 16:57:51'),
(20, 23, 38, 11, 9, 18, 40, 52, -12, 42, '2023-11-20 16:17:59', '2023-11-20 16:58:04');

-- --------------------------------------------------------

--
-- Table structure for table `laliga2223`
--

CREATE TABLE `laliga2223` (
  `id_laliga2223` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `laliga2223`
--

INSERT INTO `laliga2223` (`id_laliga2223`, `id_club`, `play`, `win`, `draw`, `lose`, `goal_in`, `goal_out`, `goal_diff`, `points`, `created_at`, `updated_at`) VALUES
(1, 1, 38, 24, 6, 8, 75, 36, 39, 78, '2023-11-20 15:55:46', '2023-11-20 17:14:11'),
(2, 2, 38, 28, 4, 6, 70, 20, 50, 88, '2023-11-20 16:06:05', '2023-11-20 17:14:29'),
(3, 3, 38, 23, 8, 7, 70, 33, 37, 77, '2023-11-20 16:06:12', '2023-11-20 17:14:43'),
(4, 4, 38, 21, 8, 9, 51, 35, 16, 71, '2023-11-20 16:06:15', '2023-11-20 17:14:52'),
(5, 5, 38, 13, 10, 15, 47, 54, -7, 49, '2023-11-20 16:06:19', '2023-11-20 17:15:06'),
(6, 6, 38, 17, 9, 12, 46, 41, 5, 60, '2023-11-20 16:06:23', '2023-11-20 17:15:16'),
(7, 7, 38, 15, 8, 15, 37, 42, -5, 53, '2023-11-20 16:06:26', '2023-11-20 17:15:31'),
(8, 8, 38, 13, 10, 15, 15, 53, -38, 49, '2023-11-20 16:06:30', '2023-11-20 17:16:47'),
(9, 9, 38, 14, 9, 15, 47, 43, 4, 51, '2023-11-20 16:06:34', '2023-11-20 17:17:03'),
(10, 10, 38, 13, 10, 15, 58, 55, 3, 49, '2023-11-20 16:06:39', '2023-11-20 17:17:13'),
(11, 12, 38, 11, 9, 18, 42, 45, -3, 42, '2023-11-20 16:06:48', '2023-11-20 17:17:27'),
(12, 13, 38, 10, 12, 16, 34, 45, -11, 42, '2023-11-20 16:06:52', '2023-11-20 17:17:40'),
(13, 14, 38, 19, 7, 12, 59, 40, 19, 64, '2023-11-20 16:06:57', '2023-11-20 17:17:51'),
(14, 16, 38, 10, 12, 16, 30, 53, -23, 42, '2023-11-20 16:07:07', '2023-11-20 17:18:04'),
(15, 17, 38, 14, 8, 16, 37, 43, -6, 50, '2023-11-20 16:07:15', '2023-11-20 17:18:17'),
(16, 18, 38, 11, 10, 17, 43, 53, -10, 43, '2023-11-20 16:07:22', '2023-11-20 17:18:31'),
(17, 20, 38, 11, 8, 19, 49, 65, -16, 41, '2023-11-20 16:07:36', '2023-11-20 17:18:44'),
(18, 21, 38, 11, 7, 20, 33, 63, -30, 40, '2023-11-20 16:07:43', '2023-11-20 17:18:54'),
(19, 22, 38, 8, 13, 17, 52, 69, -17, 37, '2023-11-20 16:07:49', '2023-11-20 17:19:11'),
(20, 23, 38, 5, 10, 23, 30, 67, -37, 25, '2023-11-20 16:07:53', '2023-11-20 17:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `laliga2324`
--

CREATE TABLE `laliga2324` (
  `id_laliga2324` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `laliga2324`
--

INSERT INTO `laliga2324` (`id_laliga2324`, `id_club`, `play`, `win`, `draw`, `lose`, `goal_in`, `goal_out`, `goal_diff`, `points`, `created_at`, `updated_at`) VALUES
(1, 10, 13, 11, 1, 1, 31, 16, 15, 34, '2023-11-20 15:31:03', '2023-11-20 17:21:10'),
(2, 1, 13, 10, 2, 1, 28, 9, 19, 32, '2023-11-20 15:31:07', '2023-11-20 17:21:01'),
(3, 2, 13, 9, 3, 1, 26, 13, 13, 30, '2023-11-20 15:31:10', '2023-11-20 17:21:20'),
(4, 3, 12, 9, 1, 2, 29, 12, 17, 28, '2023-11-20 15:31:13', '2023-11-20 17:21:35'),
(5, 4, 13, 6, 4, 3, 23, 16, 7, 22, '2023-11-20 15:31:18', '2023-11-20 17:21:45'),
(6, 9, 13, 7, 3, 3, 25, 17, 8, 24, '2023-11-20 15:31:20', '2023-11-20 17:22:00'),
(7, 6, 13, 5, 6, 2, 17, 16, 1, 21, '2023-11-20 15:31:25', '2023-11-20 17:22:11'),
(8, 8, 13, 4, 6, 3, 15, 17, -2, 18, '2023-11-20 15:31:30', '2023-11-20 17:22:21'),
(9, 5, 12, 2, 6, 4, 18, 17, 1, 12, '2023-11-20 15:31:33', '2023-11-20 17:22:29'),
(10, 7, 13, 4, 2, 7, 15, 21, -6, 14, '2023-11-20 15:31:35', '2023-11-20 17:22:42'),
(11, 11, 13, 5, 3, 5, 11, 12, -1, 18, '2023-11-20 15:31:42', '2023-11-20 17:22:51'),
(12, 12, 13, 5, 3, 5, 16, 18, -2, 18, '2023-11-20 15:31:45', '2023-11-20 17:23:06'),
(13, 13, 13, 3, 7, 3, 15, 17, -2, 16, '2023-11-20 15:31:47', '2023-11-20 17:23:17'),
(14, 15, 13, 3, 3, 7, 11, 18, -7, 12, '2023-11-20 15:31:51', '2023-11-20 17:23:28'),
(15, 14, 13, 3, 3, 7, 18, 24, -6, 12, '2023-11-20 15:31:54', '2023-11-20 17:23:50'),
(16, 16, 12, 2, 4, 6, 10, 17, -7, 10, '2023-11-20 15:31:57', '2023-11-20 17:24:03'),
(17, 17, 12, 1, 6, 5, 12, 18, -6, 9, '2023-11-20 15:32:01', '2023-11-20 17:24:13'),
(18, 18, 13, 1, 4, 8, 14, 24, -10, 7, '2023-11-20 15:32:06', '2023-11-20 17:24:22'),
(19, 19, 13, 1, 4, 8, 18, 30, -12, 7, '2023-11-20 15:32:09', '2023-11-20 17:24:30'),
(20, 20, 13, 0, 3, 10, 15, 35, -20, 3, '2023-11-20 15:32:12', '2023-11-20 17:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `ligue11920`
--

CREATE TABLE `ligue11920` (
  `id_ligue11920` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ligue12021`
--

CREATE TABLE `ligue12021` (
  `id_ligue12021` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ligue12122`
--

CREATE TABLE `ligue12122` (
  `id_ligue12122` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ligue12223`
--

CREATE TABLE `ligue12223` (
  `id_ligue12223` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ligue12324`
--

CREATE TABLE `ligue12324` (
  `id_ligue12324` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pl1920`
--

CREATE TABLE `pl1920` (
  `id_pl1920` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pl2021`
--

CREATE TABLE `pl2021` (
  `id_pl2021` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pl2122`
--

CREATE TABLE `pl2122` (
  `id_pl2122` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pl2223`
--

CREATE TABLE `pl2223` (
  `id_pl2223` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pl2324`
--

CREATE TABLE `pl2324` (
  `id_pl2324` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qf`
--

CREATE TABLE `qf` (
  `id_qf` int(11) NOT NULL,
  `code_qf` varchar(3) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `qf`
--

INSERT INTO `qf` (`id_qf`, `code_qf`, `created_at`, `updated_at`) VALUES
(1, 'QF1', '2023-11-20 10:19:58', '2023-11-20 10:19:58'),
(2, 'QF2', '2023-11-20 10:20:02', '2023-11-20 10:20:02'),
(3, 'QF3', '2023-11-20 10:20:06', '2023-11-20 10:20:06'),
(4, 'QF4', '2023-11-20 10:20:11', '2023-11-20 10:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `ro16`
--

CREATE TABLE `ro16` (
  `id_ro16` int(11) NOT NULL,
  `code_ro16` varchar(2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ro16`
--

INSERT INTO `ro16` (`id_ro16`, `code_ro16`, `created_at`, `updated_at`) VALUES
(1, 'R1', '2023-11-20 10:19:33', '2023-11-20 10:19:33'),
(2, 'R2', '2023-11-20 10:19:36', '2023-11-20 10:19:36'),
(3, 'R3', '2023-11-20 10:19:38', '2023-11-20 10:19:38'),
(4, 'R4', '2023-11-20 10:19:40', '2023-11-20 10:19:40'),
(5, 'R5', '2023-11-20 10:19:44', '2023-11-20 10:19:44'),
(6, 'R6', '2023-11-20 10:19:47', '2023-11-20 10:19:47'),
(7, 'R7', '2023-11-20 10:19:50', '2023-11-20 10:19:50'),
(8, 'R8', '2023-11-20 10:19:53', '2023-11-20 10:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `seriea1920`
--

CREATE TABLE `seriea1920` (
  `id_seriea1920` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seriea2021`
--

CREATE TABLE `seriea2021` (
  `id_seriea2021` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seriea2122`
--

CREATE TABLE `seriea2122` (
  `id_seriea2122` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seriea2223`
--

CREATE TABLE `seriea2223` (
  `id_seriea2223` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seriea2324`
--

CREATE TABLE `seriea2324` (
  `id_seriea2324` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goal_in` int(11) NOT NULL,
  `goal_out` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sf`
--

CREATE TABLE `sf` (
  `id_sf` int(11) NOT NULL,
  `code_sf` varchar(3) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sf`
--

INSERT INTO `sf` (`id_sf`, `code_sf`, `created_at`, `updated_at`) VALUES
(1, 'SF1', '2023-11-20 10:20:16', '2023-11-20 10:20:16'),
(2, 'SF2', '2023-11-20 10:20:21', '2023-11-20 10:20:21');

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
-- Indexes for table `bundesliga1920`
--
ALTER TABLE `bundesliga1920`
  ADD PRIMARY KEY (`id_bundesliga1920`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `bundesliga2021`
--
ALTER TABLE `bundesliga2021`
  ADD PRIMARY KEY (`id_bundesliga2021`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `bundesliga2122`
--
ALTER TABLE `bundesliga2122`
  ADD PRIMARY KEY (`id_bundesliga2122`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `bundesliga2223`
--
ALTER TABLE `bundesliga2223`
  ADD PRIMARY KEY (`id_bundesliga2223`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `bundesliga2324`
--
ALTER TABLE `bundesliga2324`
  ADD PRIMARY KEY (`id_bundesliga2324`),
  ADD KEY `id_club` (`id_club`);

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
-- Indexes for table `final`
--
ALTER TABLE `final`
  ADD PRIMARY KEY (`id_final`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `laliga1920`
--
ALTER TABLE `laliga1920`
  ADD PRIMARY KEY (`id_laliga1920`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `laliga2021`
--
ALTER TABLE `laliga2021`
  ADD PRIMARY KEY (`id_laliga2021`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `laliga2122`
--
ALTER TABLE `laliga2122`
  ADD PRIMARY KEY (`id_laliga2122`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `laliga2223`
--
ALTER TABLE `laliga2223`
  ADD PRIMARY KEY (`id_laliga2223`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `laliga2324`
--
ALTER TABLE `laliga2324`
  ADD PRIMARY KEY (`id_laliga2324`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `ligue11920`
--
ALTER TABLE `ligue11920`
  ADD PRIMARY KEY (`id_ligue11920`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `ligue12021`
--
ALTER TABLE `ligue12021`
  ADD PRIMARY KEY (`id_ligue12021`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `ligue12122`
--
ALTER TABLE `ligue12122`
  ADD PRIMARY KEY (`id_ligue12122`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `ligue12223`
--
ALTER TABLE `ligue12223`
  ADD PRIMARY KEY (`id_ligue12223`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `ligue12324`
--
ALTER TABLE `ligue12324`
  ADD PRIMARY KEY (`id_ligue12324`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `pl1920`
--
ALTER TABLE `pl1920`
  ADD PRIMARY KEY (`id_pl1920`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `pl2021`
--
ALTER TABLE `pl2021`
  ADD PRIMARY KEY (`id_pl2021`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `pl2122`
--
ALTER TABLE `pl2122`
  ADD PRIMARY KEY (`id_pl2122`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `pl2223`
--
ALTER TABLE `pl2223`
  ADD PRIMARY KEY (`id_pl2223`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `pl2324`
--
ALTER TABLE `pl2324`
  ADD PRIMARY KEY (`id_pl2324`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `qf`
--
ALTER TABLE `qf`
  ADD PRIMARY KEY (`id_qf`);

--
-- Indexes for table `ro16`
--
ALTER TABLE `ro16`
  ADD PRIMARY KEY (`id_ro16`);

--
-- Indexes for table `seriea1920`
--
ALTER TABLE `seriea1920`
  ADD PRIMARY KEY (`id_seriea1920`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `seriea2021`
--
ALTER TABLE `seriea2021`
  ADD PRIMARY KEY (`id_seriea2021`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `seriea2122`
--
ALTER TABLE `seriea2122`
  ADD PRIMARY KEY (`id_seriea2122`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `seriea2223`
--
ALTER TABLE `seriea2223`
  ADD PRIMARY KEY (`id_seriea2223`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `seriea2324`
--
ALTER TABLE `seriea2324`
  ADD PRIMARY KEY (`id_seriea2324`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `sf`
--
ALTER TABLE `sf`
  ADD PRIMARY KEY (`id_sf`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bundesliga1920`
--
ALTER TABLE `bundesliga1920`
  MODIFY `id_bundesliga1920` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bundesliga2021`
--
ALTER TABLE `bundesliga2021`
  MODIFY `id_bundesliga2021` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bundesliga2122`
--
ALTER TABLE `bundesliga2122`
  MODIFY `id_bundesliga2122` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bundesliga2223`
--
ALTER TABLE `bundesliga2223`
  MODIFY `id_bundesliga2223` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bundesliga2324`
--
ALTER TABLE `bundesliga2324`
  MODIFY `id_bundesliga2324` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `id_club` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
-- AUTO_INCREMENT for table `final`
--
ALTER TABLE `final`
  MODIFY `id_final` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `laliga1920`
--
ALTER TABLE `laliga1920`
  MODIFY `id_laliga1920` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `laliga2021`
--
ALTER TABLE `laliga2021`
  MODIFY `id_laliga2021` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `laliga2122`
--
ALTER TABLE `laliga2122`
  MODIFY `id_laliga2122` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `laliga2223`
--
ALTER TABLE `laliga2223`
  MODIFY `id_laliga2223` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `laliga2324`
--
ALTER TABLE `laliga2324`
  MODIFY `id_laliga2324` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ligue11920`
--
ALTER TABLE `ligue11920`
  MODIFY `id_ligue11920` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ligue12021`
--
ALTER TABLE `ligue12021`
  MODIFY `id_ligue12021` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ligue12122`
--
ALTER TABLE `ligue12122`
  MODIFY `id_ligue12122` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ligue12223`
--
ALTER TABLE `ligue12223`
  MODIFY `id_ligue12223` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ligue12324`
--
ALTER TABLE `ligue12324`
  MODIFY `id_ligue12324` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pl1920`
--
ALTER TABLE `pl1920`
  MODIFY `id_pl1920` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pl2021`
--
ALTER TABLE `pl2021`
  MODIFY `id_pl2021` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pl2122`
--
ALTER TABLE `pl2122`
  MODIFY `id_pl2122` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pl2223`
--
ALTER TABLE `pl2223`
  MODIFY `id_pl2223` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pl2324`
--
ALTER TABLE `pl2324`
  MODIFY `id_pl2324` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qf`
--
ALTER TABLE `qf`
  MODIFY `id_qf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ro16`
--
ALTER TABLE `ro16`
  MODIFY `id_ro16` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seriea1920`
--
ALTER TABLE `seriea1920`
  MODIFY `id_seriea1920` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seriea2021`
--
ALTER TABLE `seriea2021`
  MODIFY `id_seriea2021` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seriea2122`
--
ALTER TABLE `seriea2122`
  MODIFY `id_seriea2122` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seriea2223`
--
ALTER TABLE `seriea2223`
  MODIFY `id_seriea2223` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seriea2324`
--
ALTER TABLE `seriea2324`
  MODIFY `id_seriea2324` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sf`
--
ALTER TABLE `sf`
  MODIFY `id_sf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
