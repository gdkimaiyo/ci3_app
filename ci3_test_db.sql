-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2020 at 04:49 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.0.33-34+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci3_test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_user_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_body` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_user_id`, `project_name`, `project_body`, `date_created`) VALUES
(1, 3, 'Launch Web App', 'What it takes to publish my app. To make the app go live!', '2020-10-27 11:55:59'),
(2, 3, 'Travel', 'Travel Bucket List', '2020-10-27 12:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_body` text NOT NULL,
  `due_date` date DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `project_id`, `task_name`, `task_body`, `due_date`, `date_created`, `status`) VALUES
(1, 1, 'App solves a problem?', 'Clearly establish this.', '2020-11-01', '2020-10-27 11:59:57', 1),
(2, 1, 'Market and Competitors', 'Market and competitors research', '2020-11-28', '2020-10-27 12:03:43', 0),
(3, 1, 'Define functionality', 'e.g users can update their profile, e.t.c', '2020-11-28', '2020-10-27 12:06:59', 0),
(4, 1, 'Sketching', 'Rough sketch on paper.', '2020-12-15', '2020-10-27 12:08:06', 0),
(5, 1, 'Plan workflow', 'wsn', '2020-12-25', '2020-10-27 12:27:54', 0),
(6, 1, 'Wire-frame the UI', 'Use design app like Figma, e.t.c', '2020-12-21', '2020-10-27 12:29:00', 0),
(7, 1, 'Architect database', 'Database creation and which to use', '2020-12-22', '2020-10-27 12:29:52', 0),
(8, 1, 'Front-end', 'Develop Front-end', '2020-12-30', '2020-10-27 12:30:57', 0),
(9, 1, 'Back-end', 'Build Back-end', '2020-12-30', '2020-10-27 12:31:23', 0),
(10, 1, 'Hosting', 'Host the Web App', '2020-12-31', '2020-10-27 12:32:03', 0),
(11, 1, 'Deploy', 'Deploy the App', '2020-12-31', '2020-10-27 12:32:23', 0),
(12, 2, 'Mombasa', 'Travel to County 001', '2020-12-20', '2020-10-27 12:34:09', 0),
(13, 2, 'Kampala', 'Travel to Kampala, Uganda', '2021-04-01', '2020-10-27 12:36:09', 0),
(14, 2, 'Paris', 'Paris here I come', '2021-11-01', '2020-10-27 12:37:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `register_date`) VALUES
(1, 'Emma', '$2y$12$Xy.jW67ljCiYkE2NEKMeT.X/cEzuAe7RWrtpEDp0kR5i.Hr0zdehS', 'Emma', 'Manuel', 'emma01@gmail.com', '2020-10-16 18:04:56'),
(2, 'MARIA', '$2y$12$./MZzXKV0P16/dMXhyzwQ.prEQrXMdS4ptQd/8UpHkLerEgStpixe', 'Maria', 'Mary', 'maria11@gmail.com', '2020-10-19 06:08:15'),
(3, 'GIDEON', '$2y$12$ZaGZKf5qiAMHkNKIs3pmL.pJT3JWe3xd8Zk0ypOM/Wjzlmt8lKUuu', 'GIDEON', 'Manuel', 'gm12@gmail.com', '2020-10-21 19:24:51'),
(4, 'EDWIN', '$2y$12$2xdDDRviZhgfZ5r1gwDOj.eqg/rB2jmv5dGtxDWit63hF.I4iWn8m', 'Edwin', 'Diaz', 'ediaz02@gmail.com', '2020-10-25 12:52:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
