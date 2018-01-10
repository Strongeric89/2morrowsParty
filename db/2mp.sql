-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2018 at 01:25 PM
-- Server version: 5.7.18
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2mp`
--

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `date`, `location`, `time`) VALUES
(1, '2018-01-27', 'Tolka Pub', 10);

-- --------------------------------------------------------

--
-- Table structure for table `testamonials`
--

CREATE TABLE `testamonials` (
  `id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testamonials`
--

INSERT INTO `testamonials` (`id`, `message`, `customer`, `date`) VALUES
(1, 'Without question made our wedding day even better, ter quality and professional was 2nd to none, if you want everyone on d dance floor then 2morrow party are the band for you.', ' Graham and Jane', '26th Aug 2017'),
(2, 'We can\'t thank 2morrow\'s party enough for their fantastic service. They played a huge range of songs which had the dance floor full for the night. Greg is extremely professional and easy to deal with. I would highly recommend this band to any couple', 'Barbara', '29th Jul 2017'),
(3, 'Amazing band and great 90s mashup at the end. Highly recomend', 'Ger', '2nd Jun 2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testamonials`
--
ALTER TABLE `testamonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `testamonials`
--
ALTER TABLE `testamonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
