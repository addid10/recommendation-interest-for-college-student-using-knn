-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2019 at 12:48 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interest`
--

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `feature_id` int(11) NOT NULL,
  `feature_name` varchar(50) DEFAULT NULL,
  `feature_variable` varchar(10) DEFAULT NULL,
  `feature_form_input` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `features_options`
--

CREATE TABLE `features_options` (
  `feature_detail_id` int(11) NOT NULL,
  `feature_id` int(11) DEFAULT NULL,
  `option_name` varchar(50) DEFAULT NULL,
  `option_value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `result_id` int(11) NOT NULL,
  `result_name` varchar(50) DEFAULT NULL,
  `result_description` varchar(500) DEFAULT NULL,
  `result_icon` varchar(20) DEFAULT 'it.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Mahasiswa'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `testing_datas`
--

CREATE TABLE `testing_datas` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `feature_id` int(11) DEFAULT NULL,
  `score` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testing_datas_evaluations`
--

CREATE TABLE `testing_datas_evaluations` (
  `id` int(11) NOT NULL,
  `neighbor_id` int(11) DEFAULT NULL,
  `euclidean_distance` double DEFAULT NULL,
  `result_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training_datas`
--

CREATE TABLE `training_datas` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `feature_id` int(11) DEFAULT NULL,
  `score` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training_datas_results`
--

CREATE TABLE `training_datas_results` (
  `id` int(11) NOT NULL,
  `result_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(191) NOT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `features_options`
--
ALTER TABLE `features_options`
  ADD PRIMARY KEY (`feature_detail_id`),
  ADD KEY `feature_id` (`feature_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `testing_datas`
--
ALTER TABLE `testing_datas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `feature_id` (`feature_id`);

--
-- Indexes for table `testing_datas_evaluations`
--
ALTER TABLE `testing_datas_evaluations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `result_id` (`result_id`),
  ADD KEY `testing_datas_evaluations_ibfk_1` (`neighbor_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `training_datas`
--
ALTER TABLE `training_datas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `feature_id` (`feature_id`);

--
-- Indexes for table `training_datas_results`
--
ALTER TABLE `training_datas_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `result_id` (`result_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features_options`
--
ALTER TABLE `features_options`
  MODIFY `feature_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testing_datas`
--
ALTER TABLE `testing_datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testing_datas_evaluations`
--
ALTER TABLE `testing_datas_evaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_datas`
--
ALTER TABLE `training_datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_datas_results`
--
ALTER TABLE `training_datas_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `features_options`
--
ALTER TABLE `features_options`
  ADD CONSTRAINT `features_options_ibfk_1` FOREIGN KEY (`feature_id`) REFERENCES `features` (`feature_id`);

--
-- Constraints for table `testing_datas`
--
ALTER TABLE `testing_datas`
  ADD CONSTRAINT `testing_datas_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `testing_datas_ibfk_3` FOREIGN KEY (`feature_id`) REFERENCES `features` (`feature_id`);

--
-- Constraints for table `testing_datas_evaluations`
--
ALTER TABLE `testing_datas_evaluations`
  ADD CONSTRAINT `testing_datas_evaluations_ibfk_1` FOREIGN KEY (`neighbor_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `testing_datas_evaluations_ibfk_2` FOREIGN KEY (`result_id`) REFERENCES `results` (`result_id`),
  ADD CONSTRAINT `testing_datas_evaluations_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `training_datas`
--
ALTER TABLE `training_datas`
  ADD CONSTRAINT `training_datas_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `training_datas_ibfk_3` FOREIGN KEY (`feature_id`) REFERENCES `features` (`feature_id`);

--
-- Constraints for table `training_datas_results`
--
ALTER TABLE `training_datas_results`
  ADD CONSTRAINT `training_datas_results_ibfk_2` FOREIGN KEY (`result_id`) REFERENCES `results` (`result_id`),
  ADD CONSTRAINT `training_datas_results_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
