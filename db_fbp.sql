-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2021 at 08:33 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.15

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
  `username` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `username`, `email`, `password`) VALUES
(1, '', 'admin', '', 'admin123'),
(2, 'I Gede Surya Amerta', 'gdamerta', 'amerta213bali@gmail.com', '$2y$10$tyA0mL/85t/iYWzBbIWpO.Cz7yfcWRW7Uqvlt.37sTwqS2jLXkxIi'),
(3, 'Gede Dilan ', 'dilan', 'amerta213bali@gmail.com', '$2y$10$DTbCF.kWPI0zwT9P0Nf8VevJ5hK.BCkzi5iImTT4zczpsa/z9f9s.');

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
(2, 'Nyoman Sarja Wiryadi', 'Photographer', 'All of my struggles and hard work have paid off following\r\n                                the program at FBP, it\r\n                                has really changed my mindset of going through this life,\r\n                                with this, I increasingly realize that exercising is not to\r\n                                make us healthy but to make us think healthier and more\r\n                                clearly.', 'after-man-1.JPG');

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
  `name` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `photos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach_profile`
--

INSERT INTO `coach_profile` (`id`, `name`, `job`, `photos`) VALUES
(3, 'Ary Pradnya 1', 'Assisten ', 'before-1.JPG'),
(4, 'Gede Amerta 2', 'Food Program', 'before-2.JPG'),
(5, 'Ary Pradnya', 'Work Out Program', 'packages-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `documentation`
--

CREATE TABLE `documentation` (
  `id` int(11) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title_packages`, `slug`, `descriptions`, `photos`, `created_at`) VALUES
(4, 'Gym Packages 2', 'gym-packages-2', 'Mantap nih', 'pic-fbp-6.JPG', '2021-03-03 01:29:59'),
(10, 'Work Out Packages 2', 'work-out-packages-2', 'Mantap nih', 'pic-fbp-3.jpeg', '2021-03-03 07:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `packages_details`
--

CREATE TABLE `packages_details` (
  `id` int(11) NOT NULL,
  `title_packages_details` text NOT NULL,
  `slug_details` varchar(255) NOT NULL,
  `descriptions_details` text NOT NULL,
  `photos_details` varchar(255) NOT NULL,
  `id_packages` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages_details`
--

INSERT INTO `packages_details` (`id`, `title_packages_details`, `slug_details`, `descriptions_details`, `photos_details`, `id_packages`) VALUES
(1, 'Leg Day', 'leg-day', 'Mantap nih', 'banner-services-3.jpg', 7),
(2, 'Upper Body', 'upper-body', 'Mantap nih', 'banner-services-2.jpg', 7),
(4, 'Body Day', 'body-day', 'sabi Lah', 'banner-services-1.jpg', 7),
(5, 'Sleep Day', 'sleep-day', 'sabi Lah', 'after-1.JPG', 7),
(6, 'Sleep Day', 'sleep-day', 'sabi Lah', 'packages-2.png', 4),
(8, 'Lego Body', 'lego-body', 'sabi Lah', 'banner-services-2.jpg', 4);

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
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `job`, `descriptions`, `photos`) VALUES
(1, 'Setya Herawan', 'Personal Trainer', 'Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer\r\nLorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer', 'coach.png'),
(2, 'Gede Amerta', 'Programmer', 'Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `after_clients`
--
ALTER TABLE `after_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `before_clients`
--
ALTER TABLE `before_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coach_profile`
--
ALTER TABLE `coach_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `packages_details`
--
ALTER TABLE `packages_details`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `after_clients`
--
ALTER TABLE `after_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `before_clients`
--
ALTER TABLE `before_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coach_profile`
--
ALTER TABLE `coach_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `packages_details`
--
ALTER TABLE `packages_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
