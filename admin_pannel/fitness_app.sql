-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 10:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `steps` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `steps`, `name`, `img`) VALUES
(22, 88, 'nn', ''),
(25, 112, 'nme', ''),
(27, 50, 'nnn', ''),
(29, 12, 'aa', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'webixun', 'webixun', 'webixun'),
(1, 'webixun', 'webixun', 'webixun');

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `id` int(11) NOT NULL,
  `rate_per_km` float NOT NULL,
  `step_in_m` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`id`, `rate_per_km`, `step_in_m`) VALUES
(1, 301, 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `goal_id` int(11) NOT NULL,
  `goal_name` varchar(255) NOT NULL,
  `goal_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`goal_id`, `goal_name`, `goal_value`) VALUES
(33, 'new goal', 123),
(35, 'n', 123),
(36, 'nnnn', 111),
(37, 'add goal', 23),
(38, 'add goal', 23);

-- --------------------------------------------------------

--
-- Table structure for table `ngos`
--

CREATE TABLE `ngos` (
  `id` int(11) NOT NULL,
  `name_ngos` varchar(255) NOT NULL,
  `partner` varchar(255) NOT NULL,
  `current_amount` int(11) NOT NULL,
  `total_goal` int(11) NOT NULL,
  `no_of_workout` int(11) NOT NULL,
  `description` text NOT NULL,
  `about` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `amount_raised` int(11) NOT NULL,
  `no_of_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngos`
--

INSERT INTO `ngos` (`id`, `name_ngos`, `partner`, `current_amount`, `total_goal`, `no_of_workout`, `description`, `about`, `img`, `amount_raised`, `no_of_days`) VALUES
(1, 'n312311133', 'partner', 34, 2, 9000, 'Your steps will provide pre-school education to children through e-learning and smart kits', 'a', 'Screenshot (1).png', 124000, 6),
(2, 'new ngo', 'partner', 34, 2, 700, 'To be trained to cultivate quality crops', 'a', 'Screenshot (1).png', 194000, 11),
(3, 'new ngo', 'partner', 34, 2, 6, 'Walk to provide financial awareness and digital literacy in villages pan India through the support of Local NGOs.', 'a', 'Screenshot (1).png', 300, 1),
(4, 'ng', 'pa', 89, 7, 0, '', 'a', 'Screenshot (1).png', 0, 0),
(5, 'myNGO', 'mypartner', 1, 12, 0, '', 'ab', 'Screenshot (1).png', 0, 0),
(6, 'ngo', 'ngo', 3, 423, 0, '', 'd', 'Screenshot (1).png', 0, 0),
(7, 'nn', 'nn', 0, 34, 0, '', 'a', 'Screenshot (1).png', 0, 0),
(8, 'new ngo', 'par', 342, 0, 0, '', 'abot', 'Screenshot (1).png', 0, 0),
(9, 'gno ', 'nog', 434, 423, 0, '', 'abo', 'Screenshot (1).png', 0, 0),
(10, 'new nog', 'new gno', 34, 34, 0, '', 'a', 'Screenshot (1).png', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ngo_count`
--

CREATE TABLE `ngo_count` (
  `user_id` int(11) NOT NULL,
  `ngo_id` int(11) NOT NULL,
  `donation` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo_count`
--

INSERT INTO `ngo_count` (`user_id`, `ngo_id`, `donation`, `timestamp`) VALUES
(10, 1, 600, '2020-12-01 06:45:34'),
(18, 1, 600, '2020-12-01 06:46:29'),
(20, 1, 700, '2020-12-01 06:46:29'),
(18, 1, 600, '2020-12-01 06:46:35'),
(20, 1, 700, '2020-12-01 06:46:35'),
(21, 1, 800, '2020-12-01 06:46:50'),
(21, 1, 800, '2020-12-01 06:47:01'),
(20, 2, 800, '2020-12-01 08:46:33'),
(20, 1, 1000, '2020-12-01 10:42:42'),
(20, 1, 1000, '2020-12-01 10:43:36'),
(20, 2, 1000, '2020-12-01 10:44:27'),
(20, 1, 1000, '2020-12-01 10:51:47'),
(20, 1, 1000, '2020-12-01 10:52:53'),
(20, 1, 1000, '2020-12-01 10:54:15'),
(20, 1, 1000, '2020-12-01 10:55:23'),
(20, 1, 1000, '2020-12-01 10:56:57'),
(20, 1, 1000, '2020-12-01 11:00:11'),
(20, 2, 1500, '2020-12-01 11:02:11'),
(25, 2, 3000, '2020-12-02 06:32:01'),
(25, 2, 3000, '2020-12-02 06:32:04'),
(25, 1, 3000, '2020-12-02 06:32:12'),
(25, 2, 3000, '2020-12-02 06:32:25'),
(25, 3, 3000, '2020-12-02 06:53:52'),
(25, 3, 4000, '2020-12-02 07:26:23'),
(25, 1, 4000, '2020-12-02 18:56:08'),
(25, 3, 2000, '2020-12-02 20:46:21'),
(25, 1, 0, '2020-12-02 20:46:25'),
(25, 1, 0, '2020-12-02 20:46:37'),
(25, 3, 2000, '2020-12-02 20:49:22'),
(25, 3, 3000, '2020-12-02 20:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` text NOT NULL,
  `gender` varchar(1) NOT NULL,
  `weight` int(3) NOT NULL,
  `goals_id` int(1) NOT NULL,
  `title` text NOT NULL,
  `bio` text NOT NULL,
  `height` int(3) NOT NULL,
  `birthday` date NOT NULL,
  `pic` varchar(255) NOT NULL,
  `current_steps` int(11) NOT NULL,
  `target_steps` int(11) NOT NULL,
  `workouts` int(11) NOT NULL,
  `todays_steps` int(11) NOT NULL,
  `total_donation_steps` int(11) NOT NULL,
  `per` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `weight`, `goals_id`, `title`, `bio`, `height`, `birthday`, `pic`, `current_steps`, `target_steps`, `workouts`, `todays_steps`, `total_donation_steps`, `per`) VALUES
(1, 'prashant', 'singh', '9984499465', 'prashantsingh2408@gmail.com', 'm', 12, 0, 'mr', 'my bio', 5, '0000-00-00', 'uploads/Screenshot (8).png', 0, 55, 0, 0, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`goal_id`);

--
-- Indexes for table `ngos`
--
ALTER TABLE `ngos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD KEY `id` (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `goal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `ngos`
--
ALTER TABLE `ngos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=422;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
