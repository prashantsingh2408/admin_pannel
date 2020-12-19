-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 02:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clone`
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
(1, 500, 'change maker', 'images/flame.jpg'),
(2, 2000, 'super change maker', 'images/orange_flame.jpg'),
(3, 5000, 'extraordinary', 'images/red_flame.jpg'),
(4, 10000, 'diamond achiever', 'images/diamond_flame.jpg');

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
(1, 10, 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `goal` varchar(255) DEFAULT NULL,
  `raised` int(11) DEFAULT NULL,
  `workouts` int(11) DEFAULT NULL,
  `change_makers` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Casual', 1),
(2, 'Regular', 3),
(3, 'Serious', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ngos`
--

CREATE TABLE `ngos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `partner` varchar(255) NOT NULL,
  `current_amount` int(11) NOT NULL,
  `total_goal` int(11) NOT NULL,
  `no_of_workout` int(11) NOT NULL,
  `description` text NOT NULL,
  `about` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `amount_raised` int(11) NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `change_makers` varchar(255) DEFAULT NULL,
  `timespent` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngos`
--

INSERT INTO `ngos` (`id`, `name`, `partner`, `current_amount`, `total_goal`, `no_of_workout`, `description`, `about`, `img`, `amount_raised`, `no_of_days`, `change_makers`, `timespent`) VALUES
(1, 'Walk for Education', 'Veda Foundation', 1000, 10000, 9000, 'Your steps will provide pre-school education to children through e-learning and smart kits', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'images/edu.jpg', 124000, 6, NULL, NULL),
(2, 'migrant farmers', 'Farmers Foundations', 2000, 18000, 700, 'To be trained to cultivate quality crops', 'To be trained to cultivate quality crops\r\nTo be trained to cultivate quality crops\r\nTo be trained to cultivate quality cropsTo be trained to cultivate quality cropsTo be trained to cultivate quality cropsTo be trained to cultivate quality cropsTo be trained to cultivate quality cropsTo be trained to cultivate quality cropsTo be trained to cultivate quality cropsTo be trained to cultivate quality cropsTo be trained to cultivate quality crops', 'images\\farmers.jpeg', 194000, 11, NULL, NULL);

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
(25, 3, 3000, '2020-12-02 20:56:20'),
(34, 2, 3000, '2020-12-03 09:26:07'),
(36, 2, 2000, '2020-12-03 09:36:07'),
(36, 1, 1000, '2020-12-03 09:38:25'),
(25, 1, 1000, '2020-12-04 19:28:19'),
(25, 1, 2000, '2020-12-04 19:47:20'),
(25, 2, 1000, '2020-12-04 19:55:18'),
(25, 2, 1000, '2020-12-04 19:56:54'),
(25, 2, 0, '2020-12-04 19:57:35'),
(25, 1, 1000, '2020-12-04 19:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `page_link` text NOT NULL,
  `msg` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `n_type` int(11) NOT NULL,
  `response` int(11) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `page_link`, `msg`, `user_id`, `n_type`, `response`, `team_id`) VALUES
(1, '25', ' wants to join your team', 36, 1, 0, 0),
(2, '37', ' wants to join your team ', 25, 1, 1, 1),
(3, '24', ' wants to join your team ', 25, 1, -1, 24),
(4, '24', ' wants to join your team ', 25, 1, -1, 24),
(5, '24', ' wants to join your team ', 25, 1, 0, 1),
(6, '64', ' wants to join your team ', 64, 1, 0, 33);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `t_name` text NOT NULL,
  `t_fn_leader` text NOT NULL,
  `t_ln_leader` text NOT NULL,
  `t_img` varchar(255) NOT NULL,
  `t_members` int(11) NOT NULL,
  `t_purpose` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `t_name`, `t_fn_leader`, `t_ln_leader`, `t_img`, `t_members`, `t_purpose`, `user_id`) VALUES
(33, 'Team1', 'Rahul', 'Gupta', 'images/user-1.jpg', 0, 'loose', 64);

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `type` int(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `team_id`, `firstname`, `lastname`, `type`, `user_id`, `status`) VALUES
(22, 33, 'Rahul', 'Gupta', 0, 64, 0);

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
  `pic` longblob NOT NULL,
  `current_steps` int(11) NOT NULL,
  `target_steps` int(11) NOT NULL,
  `workouts` int(11) NOT NULL,
  `todays_steps` int(11) NOT NULL,
  `total_donation_steps` int(11) NOT NULL,
  `per` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `weight`, `goals_id`, `title`, `bio`, `height`, `birthday`, `pic`, `current_steps`, `target_steps`, `workouts`, `todays_steps`, `total_donation_steps`, `per`) VALUES
(64, 'Rahul', 'Gupta', '9140707110', 'rg89567@gmail.com', 'M', 52, 3, '', '', 0, '0000-00-00', 0x696d616765732f757365722d312e6a7067, 0, 10000, 0, 0, 0, 0),
(65, 'Rahul', 'Gupta', '9455841203', 'rg89567@gmail.com', 'M', 85, 3, 'Change Maker', 'Coder', 165, '2020-12-19', 0x2e2f75706c6f616465732f736d616c6c2f383137313630383337383537342e6a7067, 0, 10000, 0, 0, 0, 0),
(66, 'Rahul', 'Gupta', '8080808080', 'rg89567@gmail.com', 'M', 85, 3, '', '', 0, '2020-12-19', 0x2e2f75706c6f616465732f736d616c6c2f383738313630383338333932312e6a7067, 0, 10000, 0, 0, 0, 0);

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
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `pick` (`goals_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `goal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ngos`
--
ALTER TABLE `ngos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
