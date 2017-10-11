-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2017 at 04:49 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `png`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `company`, `img`) VALUES
(1, 'best buy', 'best_buy.png'),
(2, 'starbucks', 'starbucks.png'),
(3, 'canadian_tire', 'canadian_tire.png'),
(4, 'sephora', 'sephora.svg'),
(5, 'shoppers_drug_mart', 'shoppers_drug_mart.jpg'),
(6, 'the_home_depot', 'the_home_depot.jpeg'),
(7, 'walmart', 'walmart.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `card_holder`
--

CREATE TABLE `card_holder` (
  `user_id` int(11) NOT NULL,
  `card_id` int(11) NOT NULL,
  `barcode` int(11) NOT NULL,
  `point` int(11) DEFAULT '0',
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `card_holder`
--

INSERT INTO `card_holder` (`user_id`, `card_id`, `barcode`, `point`, `note`) VALUES
(2, 1, 1352166295, 0, 'orem ipsum dolor sit amet, consectetur adipiscing elit. Nunc felis tortor, luctus vitae bibendum eu, laoreet in ex. Nam quis diam a ex scelerisque accumsan. Etiam tristique tincidunt semper. In convallis massa lobortis pharetra fermentum. Etiam tincidunt lectus eu luctus iaculis. Suspendisse tempor cursus egestas. Etiam sit amet urna ac dolor porta suscipit. Mauris diam leo, posuere sit amet turpis vel, volutpat rhoncus mi.\r\n\r\nCras in sodales eros. Etiam elementum, massa nec condimentum posuere, enim mi eleifend dolor, id vestibulum lorem elit eget sapien. Nunc a enim laoreet, ultricies dui non, sollicitudin arcu. Nulla dui dolor, maximus sodales ante a, lacinia gravida augue. Nullam eu est interdum, vulputate nulla in, tristique felis. Nunc sollicitudin sapien a tortor iaculis vestibulum. Sed ultricies vehicula leo, quis commodo est auctor eget. Proin mollis tortor eget mi tempor tempus.'),
(2, 1, 1903725827, 0, 'orem ipsum dolor sit amet, consectetur adipiscing elit. Nunc felis tortor, luctus vitae bibendum eu, laoreet in ex. Nam quis diam a ex scelerisque accumsan. Etiam tristique tincidunt semper. In convallis massa lobortis pharetra fermentum. Etiam tincidunt lectus eu luctus iaculis. Suspendisse tempor cursus egestas. Etiam sit amet urna ac dolor porta suscipit. Mauris diam leo, posuere sit amet turpis vel, volutpat rhoncus mi.\r\n\r\nCras in sodales eros. Etiam elementum, massa nec condimentum posuere, enim mi eleifend dolor, id vestibulum lorem elit eget sapien. Nunc a enim laoreet, ultricies dui non, sollicitudin arcu. Nulla dui dolor, maximus sodales ante a, lacinia gravida augue. Nullam eu est interdum, vulputate nulla in, tristique felis. Nunc sollicitudin sapien a tortor iaculis vestibulum. Sed ultricies vehicula leo, quis commodo est auctor eget. Proin mollis tortor eget mi tempor tempus.'),
(2, 2, 362156222, 0, 'orem ipsum dolor sit amet, consectetur adipiscing elit. Nunc felis tortor, luctus vitae bibendum eu, laoreet in ex. Nam quis diam a ex scelerisque accumsan. Etiam tristique tincidunt semper. In convallis massa lobortis pharetra fermentum. Etiam tincidunt lectus eu luctus iaculis. Suspendisse tempor cursus egestas. Etiam sit amet urna ac dolor porta suscipit. Mauris diam leo, posuere sit amet turpis vel, volutpat rhoncus mi.\r\n\r\nCras in sodales eros. Etiam elementum, massa nec condimentum posuere, enim mi eleifend dolor, id vestibulum lorem elit eget sapien. Nunc a enim laoreet, ultricies dui non, sollicitudin arcu. Nulla dui dolor, maximus sodales ante a, lacinia gravida augue. Nullam eu est interdum, vulputate nulla in, tristique felis. Nunc sollicitudin sapien a tortor iaculis vestibulum. Sed ultricies vehicula leo, quis commodo est auctor eget. Proin mollis tortor eget mi tempor tempus.'),
(2, 3, 8320299, 0, 'orem ipsum dolor sit amet, consectetur adipiscing elit. Nunc felis tortor, luctus vitae bibendum eu, laoreet in ex. Nam quis diam a ex scelerisque accumsan. Etiam tristique tincidunt semper. In convallis massa lobortis pharetra fermentum. Etiam tincidunt lectus eu luctus iaculis. Suspendisse tempor cursus egestas. Etiam sit amet urna ac dolor porta suscipit. Mauris diam leo, posuere sit amet turpis vel, volutpat rhoncus mi.\r\n\r\nCras in sodales eros. Etiam elementum, massa nec condimentum posuere, enim mi eleifend dolor, id vestibulum lorem elit eget sapien. Nunc a enim laoreet, ultricies dui non, sollicitudin arcu. Nulla dui dolor, maximus sodales ante a, lacinia gravida augue. Nullam eu est interdum, vulputate nulla in, tristique felis. Nunc sollicitudin sapien a tortor iaculis vestibulum. Sed ultricies vehicula leo, quis commodo est auctor eget. Proin mollis tortor eget mi tempor tempus.'),
(2, 5, 123123123, 0, '111111231231231\r\n23\r\n4\r\n1324123\r\n4\r\n123\r\n4123\r\n4\r\n324\r\ngjhkjhvkhkjh kjhjkhj kh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'sangmin', '1234', 'sangmin.tyler.kim@gmail.com'),
(2, 'Hyun Ji', '1234', 'hyunji@gmail.com'),
(3, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(4, 'hyunji', '81dc9bdb52d04dc20036dbd8313ed055', 'hyunji@abc.com'),
(5, 'leo', '4a7d1ed414474e4033ac29ccb8653d9b', 'leo@abc.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
