-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2021 at 12:10 PM
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
  `slug` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('master','co-admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `slug`, `username`, `email`, `phone`, `password`, `level`) VALUES
(1, 'future-body-project', '', 'admin', 'fbp@gmail.com', '0', '$2y$10$xtub2echNays4X1jTm2bNuDWu87Sd8cZadkqiXRvAUOk8iO2rB/wq', 'master'),
(5, 'Ary Pradnya Dewi 2', 'ary-pradnya-dewi', 'arypradnya2', 'amertasurya@yahoo.co.id', '081338103073', '$2y$10$PsA2ivbN53rJcZWccW.EIeIJdlO1X.3.aFqOdTrGOIa.l38lB/0W2', 'co-admin');

-- --------------------------------------------------------

--
-- Table structure for table `after_clients`
--

CREATE TABLE `after_clients` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `job` text NOT NULL,
  `descriptions` text NOT NULL,
  `photos` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `after_clients`
--

INSERT INTO `after_clients` (`id`, `name`, `job`, `descriptions`, `photos`, `created_at`) VALUES
(1, ' Dewi Lestari', 'Legal Contract of KarmaResort', 'This is me now, many changes can be seen, starting to erode fat and starting to build muscle, all types of exercises given have a very drastic effect on my body', 'after-1.JPG', '2021-03-04 08:23:01'),
(2, 'Nyoman Sarja Wiryadi', 'Photographer', 'All of my struggles and hard work have paid off following\r\n                                the program at FBP, it\r\n                                has really changed my mindset of going through this life,\r\n                                with this, I increasingly realize that exercising is not to\r\n                                make us healthy but to make us think healthier and more\r\n                                clearly.', 'after-man-1.JPG', '2021-03-04 08:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `before_clients`
--

CREATE TABLE `before_clients` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `job` text NOT NULL,
  `descriptions` text NOT NULL,
  `photos` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `before_clients`
--

INSERT INTO `before_clients` (`id`, `name`, `job`, `descriptions`, `photos`, `created_at`) VALUES
(2, 'Nyoman Sarja Wiryadi', 'Photographer', 'I am already overweight, I want to change my lifestyle to be healthier, this is the beginning where I have not started a healthy life', 'before-2.JPG', '2021-03-04 08:23:16'),
(3, 'Dewi Lestari', 'Legal Contract of KarmaResort', '&lt;div&gt;\r\n&lt;div&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;This is me 1 year before joining FBP training, it looks like my body is full of belly fat and less proportional&lt;/span&gt;&lt;/div&gt;\r\n&lt;/div&gt;', 'before-1.JPG', '2021-03-04 09:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `coach_profile`
--

CREATE TABLE `coach_profile` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach_profile`
--

INSERT INTO `coach_profile` (`id`, `name`, `job`, `photos`, `created_at`) VALUES
(7, 'Gede Amerta', 'Assisten ', 'coach-1.jpg', '2021-03-05 11:10:16'),
(8, 'Ary Pradnya ', 'Work Out Program', 'slider_services-1.jpg', '2021-03-05 11:15:05'),
(9, 'Gana Untaran', 'Food Program', 'coach-3.jpg', '2021-03-06 09:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `documentation`
--

CREATE TABLE `documentation` (
  `id` int(11) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documentation`
--

INSERT INTO `documentation` (`id`, `photos`, `created_at`) VALUES
(4, 'pic-fbp-1.JPG', '2021-03-04 08:22:38'),
(5, 'pic-fbp-2.jpeg', '2021-03-04 08:22:46'),
(6, 'pic-fbp-3.jpeg', '2021-03-04 08:22:54'),
(7, 'pic-fbp-4.JPG', '2021-03-04 08:23:52'),
(9, 'pic-fbp-5.JPG', '2021-03-04 08:24:14'),
(10, 'pic-fbp-6.JPG', '2021-03-04 08:24:23');

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
(14, 'Packages 1', 'packages-1', '&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;The first package is a starting package suitable for beginners who want to try a healthy lifestyle. by exercising and fulfilling good nutritional needs will be discussed in the first package &lt;/span&gt;&lt;/p&gt;', 'packages-1.png', '2021-03-04 06:35:16'),
(15, 'Packages 2', 'packages-2', '&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;The second package is for people who are beginning to understand how to manage a more regular diet and exercise&lt;/span&gt;&lt;/p&gt;', 'packages-2.png', '2021-03-04 06:35:51'),
(16, 'Packages 3', 'packages-3', '&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;The third package is specifically for people who are able to manage themselves and their diet is more awake, but here will be given extra special exercises.&lt;/span&gt;&lt;/p&gt;', 'packages-3.png', '2021-03-04 06:36:15');

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
(13, 'Boddy Upper', 'boddy-upper', 'Oke good', 'background-contact.jpg', 4),
(14, 'Body Upper 1', 'body-upper-1', 'sabi nich 2', 'banner-services-2.jpg', 4),
(15, 'Body Upper 1', 'body-upper-1', 'Arigatous', 'banner-services-1.jpg', 13),
(16, 'Lego Body', 'lego-body', 'Bisa nih', 'before-man.jpg', 13),
(17, 'Body Day', 'body-day', '12312312312', 'before-girl.jpg', 13),
(18, 'Gym Program', 'gym-program', '&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;Certain movements that cause injury due to improper movements, you will be trained here&lt;/span&gt;&lt;/p&gt;', 'man-pull2.jpg', 14),
(19, 'Food Program', 'food-program', '&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;Your food will start to be arranged here, but that does not mean that you are forced to eat according to what we ask&lt;/span&gt;&lt;/p&gt;', 'packages4.jpg', 14),
(20, 'Gym Program', 'gym-program', '&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;Certain movements that cause injury due to improper movements, you will be trained here&lt;/span&gt;&lt;/p&gt;', 'man-pull2.jpg', 15),
(21, 'Food Program', 'food-program', '&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;Your food will start to be arranged here, but that does not mean that you are forced to eat according to what we ask&lt;/span&gt;&lt;/p&gt;', 'packages4.jpg', 15),
(22, 'Work Out Program', 'work-out-program', '&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;The work out that you get will be very varied and more fun&lt;/span&gt;&lt;/p&gt;', 'packages-3.png', 15),
(23, 'Work Out Program', 'work-out-program', '&lt;p&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;The work out that you get will be very varied and more fun &lt;/span&gt;&lt;/p&gt;', 'packages-3.png', 16),
(24, 'Online Coaching', 'online-coaching', '&lt;p&gt;ini online coaching&lt;/p&gt;', 'pic-fbp-3.jpeg', 16),
(25, 'Gym Program', 'gym-program', '&lt;p&gt;Certain movements that cause injury due to improper movements, you will be trained here&lt;/p&gt;', 'man-pull2.jpg', 16),
(26, 'Food Program', 'food-program', '&lt;p&gt;Your food will start to be arranged here, but that does not mean that you are forced to eat according to what we ask&lt;/p&gt;', 'packages4.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `job` text NOT NULL,
  `descriptions` text NOT NULL,
  `photos` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `job`, `descriptions`, `photos`, `created_at`) VALUES
(1, 'Ary Pradnya', 'Podcaster', '&lt;p&gt;The best training I\'ve ever had, because before I had never found the right trainer, the right diet and the right type of exercise. &lt;strong&gt;FBP&lt;/strong&gt; the one and only&lt;/p&gt;', 'testi-1.jpg', '2021-03-04 08:23:50'),
(2, 'Gede Amerta', 'Programmer', '&lt;p&gt;After I practiced here, all of my activities were more organized, and I also knew how to practice properly and correctly&lt;/p&gt;', 'testi-2.jpg', '2021-03-06 08:11:29'),
(3, 'Gana Untaran', 'Fullstack Programmer', '&lt;p&gt;I am very happy after practicing here, I am very impressed with the training provided&lt;/p&gt;', 'testi-3.jpg', '2021-03-06 08:39:40'),
(4, 'Angga Tusan', 'Tukang Kebun', '&lt;p&gt;Wow, it really made me change drastically, not just my body but my way of thinking to be healthier&lt;/p&gt;', 'testi-4.jpg', '2021-03-06 08:43:16');

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
-- Indexes for table `documentation`
--
ALTER TABLE `documentation`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `after_clients`
--
ALTER TABLE `after_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `before_clients`
--
ALTER TABLE `before_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coach_profile`
--
ALTER TABLE `coach_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `documentation`
--
ALTER TABLE `documentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `packages_details`
--
ALTER TABLE `packages_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
