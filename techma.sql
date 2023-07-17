-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 17, 2023 at 12:07 PM
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
  `password` varchar(255) DEFAULT NULL,
  `registered_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `name`, `email`, `password`, `registered_at`) VALUES
(10, 'Sausa', 'Nabil', 'Nabil@gmail.com', '1234', '2023-07-17 00:55:01'),
(11, 'Sausa', 'Logam', 'Abi@gmail.com', '221', '2023-07-17 02:42:09'),
(12, 'Pentol', 'bunga', 'Logam@gmail.com', '1234', '2023-07-17 04:13:51');

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
(40, 'cat.jpg', 'Nabee', 2, 'ganteng', '999888', 'Fired', '2023-07-17 08:29:11', '2023-07-16 22:00:03'),
(41, 'cat.jpg', 'Abii', 2, 'lol', '100000', 'Working', '2023-07-17 09:41:27', '2023-07-16 22:05:32'),
(46, 'cat2.jpg', 'Logam', 1, 'lol', '22222', 'Working', '2023-07-17 09:45:01', '2023-07-16 22:00:15'),
(47, 'download (1).jpg', 'Abii', 2, 'lolo', '5555', 'Working', '2023-07-17 10:00:39', NULL);

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
(2, 'Accountant');

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employe`
--
ALTER TABLE `employe`
  MODIFY `id_employe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `occupation`
--
ALTER TABLE `occupation`
  MODIFY `id_occupation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
