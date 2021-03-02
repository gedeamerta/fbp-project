-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2021 at 04:12 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fbp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `username`, `email`, `password`) VALUES
(1, '', 'admin', '', '$2y$10$J2DHjSV7d/LGXAgBpn92XuLsKIzCXMVF3uRShuXC6oRHtWUmvttCm');

-- --------------------------------------------------------

--
-- Table structure for table `after_clients`
--

CREATE TABLE `after_clients` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `job` text NOT NULL,
  `descriptions` text NOT NULL,
  `photos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `after_clients`
--

INSERT INTO `after_clients` (`id`, `name`, `job`, `descriptions`, `photos`) VALUES
(1, ' Dewi Lestari', 'Legal Contract of KarmaResort', 'This is me now, many changes can be seen, starting to erode fat and starting to build muscle, all types of exercises given have a very drastic effect on my body', 'after-1.JPG'),
(2, '                                Nyoman Sarja Wiryadi', '                                Photographer', '                                All of my struggles and hard work have paid off following\r\n                                the program at FBP, it\r\n                                has really changed my mindset of going through this life,\r\n                                with this, I increasingly realize that exercising is not to\r\n                                make us healthy but to make us think healthier and more\r\n                                clearly.', 'after-man-1.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `before_clients`
--

CREATE TABLE `before_clients` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `job` text NOT NULL,
  `descriptions` text NOT NULL,
  `photos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `before_clients`
--

INSERT INTO `before_clients` (`id`, `name`, `job`, `descriptions`, `photos`) VALUES
(1, 'Dewi Lestari', 'Legal Contract of KarmaResort', 'This is me 1 year before joining FBP training, it looks like my body is full of belly fat and less proportional', 'before-1.JPG'),
(2, 'Nyoman Sarja Wiryadi', 'Photographer', 'I am already overweight, I want to change my lifestyle to be healthier, this is the beginning where I have not started a healthy life', 'before-2.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `coach_profile`
--

CREATE TABLE `coach_profile` (
  `id` int(11) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `descriptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documentation`
--

CREATE TABLE `documentation` (
  `id` int(11) NOT NULL,
  `photos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `title_packages` text NOT NULL,
  `slug` varchar(100) NOT NULL,
  `descriptions` text NOT NULL,
  `photos` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title_packages`, `slug`, `descriptions`, `photos`, `created_at`) VALUES
(1, 'Packages Gym', 'packages-gym', 'Test', 'kintil untuk menyambar.jpg', '2021-03-02 21:18:32'),
(2, 'Packages Food', 'packages-food', 'test etst', '', '2021-03-02 23:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

CREATE TABLE `package_details` (
  `id` int(11) NOT NULL,
  `title_package` text NOT NULL,
  `descriptions` text NOT NULL,
  `photos` varchar(255) NOT NULL,
  `id_packages` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `job` text NOT NULL,
  `descriptions` text NOT NULL,
  `photos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_details`
--
ALTER TABLE `package_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_packages` (`id_packages`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package_details`
--
ALTER TABLE `package_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
