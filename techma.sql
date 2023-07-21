-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 21, 2023 at 08:27 AM
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
-- Database: `techma`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `name`, `email`, `password`, `registered_at`) VALUES
(7, 'Sausa', 'Abii', 'Abi@gmail.co', '$2y$10$9pYdFxftmeblUkaxnVE8UOAUx6vQdNupziI0CHG2S60kHoLbtUQ6.', '2023-07-18 15:47:36'),
(18, 'Sausage', 'Abii', 'Abi@gmail.com', '$2y$10$wiM/bLCg4DmpQq78VsqPCe.Z5X2qVe5yg8GxFTYpkIWrfBSIle7EG', '2023-07-21 02:21:01'),
(19, 'Logamers', 'Logam', 'Logam@gmail.com', '$2y$10$NTA91IVII8DX0Im4zfX9N.wbsMUi3O8Kme9M9SaD0Ki4cI8Qmz5Xm', '2023-07-21 06:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE `employe` (
  `id_employe` int(11) NOT NULL,
  `employe_image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `id_occupation` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `employe_status` enum('Working','Fired') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`id_employe`, `employe_image`, `name`, `id_occupation`, `description`, `salary`, `employe_status`, `created_at`, `updated_at`) VALUES
(56, 'abi.jpg', 'Logam', 3, 'lo', '100000', 'Fired', '2023-07-20 04:24:59', '2023-07-21 02:14:36'),
(59, 'cat.jpg', 'Nab', 1, 'lo', '9', 'Working', '2023-07-21 02:19:01', '2023-07-21 03:01:31'),
(60, 'cat2.jpg', 'Abii', 3, 'lol', '11000', 'Working', '2023-07-21 02:58:36', '2023-07-21 02:58:49'),
(62, 'TechmaIcon.png', 'Logam', 2, 'lol', '100000', 'Working', '2023-07-21 06:26:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `occupation`
--

CREATE TABLE `occupation` (
  `id_occupation` int(11) NOT NULL,
  `occupation_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `occupation`
--

INSERT INTO `occupation` (`id_occupation`, `occupation_name`) VALUES
(1, 'IT'),
(2, 'Accountant'),
(3, 'Marketing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id_employe`);

--
-- Indexes for table `occupation`
--
ALTER TABLE `occupation`
  ADD PRIMARY KEY (`id_occupation`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `employe`
--
ALTER TABLE `employe`
  MODIFY `id_employe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `occupation`
--
ALTER TABLE `occupation`
  MODIFY `id_occupation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
