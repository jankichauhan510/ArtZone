-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 09:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `InterestedArts` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(256) NOT NULL,
  `image` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `fname`, `lname`, `username`, `InterestedArts`, `email`, `password`, `date`, `phone`, `address`, `image`) VALUES
(1, 'Janki', 'Chauhan', 'janki24', 'Painting ', 'jankichauhan05@gmail.com', '$2y$04$5AAlnik2sAsWRnA1QLOfD.PBct3OoVSVIpHayQDO.TsWeBLsqmCwG', '2023-09-18', 2147483647, 'Mendarda', 'profile_54602398.jpeg'),
(2, 'Aesha', 'Shah', 'aesha123', 'Sketches ', 'aeshashah123@gmail.com', '$2y$04$KY1yzNs06laKZROEkEK7n.0BQH/Yhqhrab21y0DeU4gadWG0.4XqC', '2023-09-19', 2147483647, 'Baroda', 'profile_1427999970.jpg'),
(3, 'Vishwa', 'Parmar', 'vishwa123', 'Glass Painting', 'vishwaparmar123@gmail.com', '$2y$04$9T4pulKPD4zxOojhG23Tdut4wBjzFj/5mv1hGxvWplisAa0vfiR.G', '2023-09-19', 2147483647, 'Baroda', 'profile_953091427.jpg'),
(4, 'khyati', 'Chauhan ', 'khyati123', 'Paper Craft ', 'khyatichauhan123@gmail.com', '$2y$04$s4aGf6SCIjZTQvlygK9e7u7deHFPgBRlRIUbYUY3UVOn4AoS/lX9q', '2023-09-19', 2147483647, 'Junagadh', 'profile_414570669.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post` varchar(256) NOT NULL,
  `uploaded_on` date NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post`, `uploaded_on`, `email`) VALUES
(10, 'painting.jpg', '2023-09-19', 'jankichauhan05@gmail.com'),
(11, 'sketch.jpg', '2023-09-19', 'aeshashah123@gmail.com'),
(12, 'glasspainting.jpg', '2023-09-19', 'vishwaparmar123@gmail.com'),
(13, 'papercraft.jpg', '2023-09-19', 'khyatichauhan123@gmail.com'),
(14, 'download (1).jpg', '2023-09-22', 'aeshashah123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
