-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 14, 2023 at 08:47 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pik1`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `answer` varchar(40) DEFAULT NULL,
  `question_id` int NOT NULL,
  `user_id` int NOT NULL,
  `newAns` int NOT NULL,
  `car_user_id` int NOT NULL,
  `car_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `answer_ibfk_1` (`question_id`),
  KEY `answer_ibfk_2` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `answer`, `question_id`, `user_id`, `newAns`, `car_user_id`, `car_id`) VALUES
(24, 'jeste', 59, 3, 0, 4, 27),
(25, 'da', 59, 3, 0, 4, 27),
(26, 'jeste', 60, 8, 5, 5, 28);

-- --------------------------------------------------------

--
-- Table structure for table `cars_table`
--

DROP TABLE IF EXISTS `cars_table`;
CREATE TABLE IF NOT EXISTS `cars_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mark` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `motor` varchar(40) DEFAULT NULL,
  `year` varchar(40) DEFAULT NULL,
  `price` varchar(40) DEFAULT NULL,
  `mileage` varchar(40) DEFAULT NULL,
  `kw` varchar(40) DEFAULT NULL,
  `abs` varchar(40) DEFAULT NULL,
  `airbag` varchar(40) DEFAULT NULL,
  `carAir` varchar(40) DEFAULT NULL,
  `fuel` varchar(40) DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `img` varchar(40) DEFAULT NULL,
  `date_of_publication` datetime DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cars_table`
--

INSERT INTO `cars_table` (`id`, `mark`, `model`, `motor`, `year`, `price`, `mileage`, `kw`, `abs`, `airbag`, `carAir`, `fuel`, `description`, `img`, `date_of_publication`, `user_id`) VALUES
(26, 'Volvo', 'xc90', '', '', '85000', '', '', 'no', 'no', 'no', 'Fuel', '', '9928ddc62cbf829a09748c21285a7915.jpeg', '2023-05-12 23:45:14', 4),
(27, 'Audi', 'q7', '', '', '85000', '', '', 'no', 'no', 'no', 'Fuel', '', 'aeca6842373b15ceeca946b2c4adfd6a.jpeg', '2023-05-12 23:45:47', 3),
(28, 'Toyota', 'landcruiser', '', '2017', '100000', '', '', 'no', 'no', 'no', 'Fuel', '', 'ece710dbc8cea756ea49750d803f1323.webp', '2023-05-13 18:20:21', 8),
(29, 'Toyota', 'yaris', '', '', '30000', '', '', 'no', 'no', 'no', 'Fuel', '', '05e2a0be37d1ceb222a5144f6a632277.jpeg', '2023-05-13 18:21:19', 5);

-- --------------------------------------------------------

--
-- Table structure for table `newmessage`
--

DROP TABLE IF EXISTS `newmessage`;
CREATE TABLE IF NOT EXISTS `newmessage` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sender_user_id` int NOT NULL,
  `recipient_user_id` int NOT NULL,
  `car_id` int NOT NULL,
  `message` varchar(499) NOT NULL,
  `message_time` datetime DEFAULT NULL,
  `newMsg` int NOT NULL,
  `sender_user_name` varchar(45) NOT NULL,
  `car` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `newmessage_ibfk_4` (`newMsg`),
  KEY `newmessage_ibfk_1` (`sender_user_id`),
  KEY `newmessage_ibfk_2` (`recipient_user_id`),
  KEY `newmessage_ibfk_3` (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `newmessage`
--

INSERT INTO `newmessage` (`id`, `sender_user_id`, `recipient_user_id`, `car_id`, `message`, `message_time`, `newMsg`, `sender_user_name`, `car`) VALUES
(16, 3, 4, 26, 'Pozdrav,kako si?', '2023-05-12 23:46:10', 0, 'Sinisa', 'Volvo-xc90'),
(17, 4, 3, 27, 'Druga poruka', '2023-05-12 23:47:17', 0, 'Leonardo', 'Audi-q7'),
(18, 3, 4, 26, 'Pokusaj poruka', '2023-05-13 18:07:55', 0, 'Sinisa', 'Volvo-xc90'),
(20, 4, 3, 26, '            dobarr', '2023-05-13 18:16:33', 0, 'Leonardo', 'Volvo-xc90'),
(21, 3, 4, 26, '            okkkk', '2023-05-13 18:17:12', 0, 'Sinisa', 'Volvo-xc90'),
(22, 4, 3, 26, '            111', '2023-05-13 18:18:52', 0, 'Leonardo', 'Volvo-xc90');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `cars_id` int NOT NULL,
  `question` text NOT NULL,
  `cars_user_id` int DEFAULT NULL,
  `newQuestion` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `question_ibfk_2` (`cars_id`),
  KEY `question_ibfk_1` (`user_id`),
  KEY `question_ibfk_3` (`cars_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `user_id`, `cars_id`, `question`, `cars_user_id`, `newQuestion`) VALUES
(58, 3, 26, 'Pitanje?', 4, 0),
(59, 4, 27, 'Da li je registrovan?', 3, 0),
(60, 5, 28, 'Da li je registrovan?', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `address`, `email`, `password`) VALUES
(3, 'Sinisa', 'Kuzmanovic', 'Celinac', '112kuzmanovic@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(4, 'Leonardo', 'Kuzmanovic', 'Celinac', 'leo@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(5, 'Kralj Ivica', 'Kuzmanovic', 'Banja Luka', 'kralj@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(6, 'Denis', 'Denis', 'Bergamo', 'denis@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(7, 'Andrija', 'Delibasic', 'Banja Luka', 'andrija@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(8, 'Patrick', 'Femerling', 'Berlin', 'patrick@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(9, 'Robert', 'Levandovski', 'Minhen', 'robert@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `answer_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `cars_table`
--
ALTER TABLE `cars_table`
  ADD CONSTRAINT `cars_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `newmessage`
--
ALTER TABLE `newmessage`
  ADD CONSTRAINT `newmessage_ibfk_1` FOREIGN KEY (`sender_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `newmessage_ibfk_2` FOREIGN KEY (`recipient_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `newmessage_ibfk_3` FOREIGN KEY (`car_id`) REFERENCES `cars_table` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`cars_id`) REFERENCES `cars_table` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `question_ibfk_3` FOREIGN KEY (`cars_user_id`) REFERENCES `cars_table` (`user_id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
