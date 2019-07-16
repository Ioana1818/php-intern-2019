-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iul. 16, 2019 la 12:10 PM
-- Versiune server: 10.3.16-MariaDB
-- Versiune PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `practica2019`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `companies`
--

INSERT INTO `companies` (`id`, `name`, `description`) VALUES
(1, 'Rompetrol', 'Companie multinațională, de petrol și gaze,foraj, servicii petroliere, servicii de ecologie industrială  '),
(2, 'Telecom', 'Telefonie mobilă și servicii fixe: voce, TV și internet'),
(3, 'Roweb', 'Roweb utilizează cele mai recente actualizări tehnologice și informații despre piață pentru a furniza soluții complete de software.');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `employees`
--

INSERT INTO `employees` (`id`, `company_id`, `name`) VALUES
(1, 3, 'Ionescu Ionut'),
(2, 3, 'Marinescu Ana'),
(3, 1, 'Tudor Marian '),
(4, 2, 'Uta Alexandra');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `company_id` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
