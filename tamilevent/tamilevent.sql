-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 02:35 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tamilevent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@mytamilevents.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE `category_master` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `cat_icon` varchar(250) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`id`, `category_name`, `cat_icon`, `description`) VALUES
(14, 'Videography', 'camera.png', 'Our videographers will capture your special moments to be cherished for a lifetime'),
(15, 'Jewelers', 'jewelery.png', 'Chose accessories from your favorite brand\'s collection to take your style a notch up.'),
(16, 'Dj', 'dj.png', 'Time to move to your favorite songs'),
(17, 'Outfits', 'fashion.png', 'Check your admired lable, choose your size and get ready to dazzle with your flair.'),
(18, 'Catering', 'catering.png', 'Indulge in finger-licking goodness prepared especially by our trained chefs.'),
(19, 'Henna', 'cocktails.png', 'Hire the services of our make-up and hair maestros to get a flawless look for your big day.'),
(21, 'Cakes', 'cake.png', 'Hire the services of our make-up and hair maestros to get a flawless look for your big day.'),
(22, 'Flowers', 'cocktails.png', 'Hire the services of our make-up and hair maestros to get a flawless look for your big day.'),
(23, 'Transportation', 'cocktails.png', 'Our car hire services list includes the most affordable providers to make your ride a memorable experience.'),
(24, 'Make-up & hair', 'beauty.png', 'Hire the services of our make-up and hair maestros to get a flawless look for your big day.'),
(25, 'Decorations', 'wedding.png', 'With our list of expert designers the stunning decor will blow life into your events.');

-- --------------------------------------------------------

--
-- Table structure for table `country_list`
--

CREATE TABLE `country_list` (
  `id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country_list`
--

INSERT INTO `country_list` (`id`, `country`) VALUES
(13, 'United Kingdom'),
(14, 'Europe'),
(15, 'Asia'),
(16, 'North America'),
(17, 'South America'),
(18, 'Africa'),
(19, 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `events_list`
--

CREATE TABLE `events_list` (
  `id` int(11) NOT NULL,
  `event_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_list`
--

INSERT INTO `events_list` (`id`, `event_name`) VALUES
(4, 'birthday'),
(6, 'Mehendi / Sangeeth'),
(7, 'Private Party'),
(8, 'Civil Registartion'),
(9, 'Reception'),
(10, 'Saree Ceremony'),
(11, 'Wedding');

-- --------------------------------------------------------

--
-- Table structure for table `event_master`
--

CREATE TABLE `event_master` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `date_of_event` varchar(255) NOT NULL,
  `event_list` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `guest_no` varchar(25) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_master`
--

INSERT INTO `event_master` (`id`, `user_id`, `event_title`, `date_of_event`, `event_list`, `country`, `guest_no`, `description`) VALUES
(5, 15, 'aa', '20 dec', 'a', 'a', 'a', 'a'),
(6, 13, '13', '20 dec', 'a', 'aa', 'aa', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_master`
--

CREATE TABLE `feedback_master` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `post_date` varchar(100) NOT NULL,
  `rating` varchar(25) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_master`
--

INSERT INTO `feedback_master` (`id`, `project_id`, `business_id`, `client_id`, `post_date`, `rating`, `feedback`) VALUES
(5, 8, 27, 27, '2020', '4', 'aaa'),
(7, 8, 29, 28, '12', '2', 'aaa'),
(8, 9, 32, 15, '13june', '3', 'good'),
(9, 8, 30, 15, '14june', '4', 'ggg'),
(10, 8, 31, 15, '19june', '2', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `locations_list`
--

CREATE TABLE `locations_list` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations_list`
--

INSERT INTO `locations_list` (`id`, `location`, `country_id`) VALUES
(3, 'kolkata', 0),
(4, 'howrah', 0),
(5, 'kolkata', 11);

-- --------------------------------------------------------

--
-- Table structure for table `milestones_master`
--

CREATE TABLE `milestones_master` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `milestone` int(11) NOT NULL,
  `description` text NOT NULL,
  `unit_price` varchar(25) NOT NULL,
  `quantity` varchar(25) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `milestones_master`
--

INSERT INTO `milestones_master` (`id`, `project_id`, `milestone`, `description`, `unit_price`, `quantity`, `total`) VALUES
(8, 9, 2222, 'bbb', '410', '2', '820'),
(10, 8, 12, 'sumana', '12', '10', '120');

-- --------------------------------------------------------

--
-- Table structure for table `project_master`
--

CREATE TABLE `project_master` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `project_expiry` varchar(100) NOT NULL,
  `project_dedline` varchar(100) NOT NULL,
  `project_type` varchar(100) NOT NULL,
  `project_price` varchar(50) NOT NULL,
  `project_details` longtext NOT NULL,
  `project_location` varchar(255) NOT NULL,
  `country` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_master`
--

INSERT INTO `project_master` (`id`, `user_id`, `job_title`, `category`, `project_expiry`, `project_dedline`, `project_type`, `project_price`, `project_details`, `project_location`, `country`) VALUES
(8, 30, 'xyz', 2, 'a', '2020', 'a', '1000', 'a', 'howrah', 'india'),
(9, 27, 'abc', 7, 'abc', 'a', 'a', '1000', 'a', 'Kolkata', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `rate_list`
--

CREATE TABLE `rate_list` (
  `id` int(11) NOT NULL,
  `rate` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate_list`
--

INSERT INTO `rate_list` (`id`, `rate`) VALUES
(8, '2'),
(9, '3'),
(10, '4');

-- --------------------------------------------------------

--
-- Table structure for table `services_list`
--

CREATE TABLE `services_list` (
  `id` int(11) NOT NULL,
  `services` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_list`
--

INSERT INTO `services_list` (`id`, `services`) VALUES
(6, 'Photography'),
(7, 'Entertainment'),
(8, 'Transpotaion'),
(9, 'Outfits'),
(10, 'Make-up & hair'),
(11, 'Henna'),
(12, 'DJ'),
(13, 'Decoration'),
(14, 'Catering'),
(15, 'Bar & Cocktails'),
(16, 'Cakes');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_portfolio`
--

CREATE TABLE `supplier_portfolio` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `portfolio_img` varchar(250) NOT NULL,
  `caption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_portfolio`
--

INSERT INTO `supplier_portfolio` (`id`, `user_id`, `portfolio_img`, `caption`) VALUES
(5, 31, 'Penguins.jpg', 'Sumana'),
(6, 15, 'Jellyfish.jpg', 'Agara '),
(7, 15, 'Hydrangeas.jpg', ' Cretions'),
(8, 15, 'Penguins.jpg', 'Agara Cretions');

-- --------------------------------------------------------

--
-- Table structure for table `user_assign_event_type`
--

CREATE TABLE `user_assign_event_type` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_type_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_assign_rate`
--

CREATE TABLE `user_assign_rate` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rate_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_assign_services`
--

CREATE TABLE `user_assign_services` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `services_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_assign_service_location`
--

CREATE TABLE `user_assign_service_location` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_location_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `country` varchar(250) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `portfolio_image` varchar(255) NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `other_description` text NOT NULL,
  `event_type` varchar(200) NOT NULL,
  `locations` varchar(200) NOT NULL,
  `services` varchar(200) NOT NULL,
  `rate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`id`, `first_name`, `last_name`, `email`, `password`, `country`, `user_type`, `portfolio_image`, `cover_image`, `description`, `other_description`, `event_type`, `locations`, `services`, `rate`) VALUES
(27, 'Sumana', 'Barui', 'admin@gmail.com', '12', 'Uk', 'Business', 'Hydrangeas.jpg', 'Hydrangeas.jpg', 'abc', 'There is no secret. The reson why we are able to boast of happy clients in an exponentially\r\ncompetitive word is obvious. We like to challenge the way think about creativity, strive to provide creative solutions that stand out and have earned a reputation for thinking anew.', '', '', '', ''),
(28, 'Sumana', 'Barui', 'admin@gmail.com', '122', 'india', 'Client', 'Jellyfish.jpg', 'avatar.jpg', 'aa', 'aa', '', '', '', ''),
(30, 'Agra ', 'Creation', 'a@gmail.com', '12', 'India', 'Business', 'Tulips.jpg', 'Tulips.jpg', 'a', 'a', '', '', '', ''),
(31, 'abc', 'xyz', 'abc@gmail.com', '12', 'Uk', 'Business', 'Lighthouse.jpg', 'Lighthouse.jpg', 'a', 'a', '', '', '', ''),
(32, 'xyz', 'abc', 'xyz@gmail.com', '12', 'xyz', 'Business', 'Penguins.jpg', 'Penguins.jpg', 'aa', 'aa', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_master`
--
ALTER TABLE `category_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_list`
--
ALTER TABLE `country_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_list`
--
ALTER TABLE `events_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_master`
--
ALTER TABLE `event_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_master`
--
ALTER TABLE `feedback_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations_list`
--
ALTER TABLE `locations_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milestones_master`
--
ALTER TABLE `milestones_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_master`
--
ALTER TABLE `project_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate_list`
--
ALTER TABLE `rate_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_list`
--
ALTER TABLE `services_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_portfolio`
--
ALTER TABLE `supplier_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_assign_event_type`
--
ALTER TABLE `user_assign_event_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_assign_rate`
--
ALTER TABLE `user_assign_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_assign_services`
--
ALTER TABLE `user_assign_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_assign_service_location`
--
ALTER TABLE `user_assign_service_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_master`
--
ALTER TABLE `category_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `country_list`
--
ALTER TABLE `country_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `events_list`
--
ALTER TABLE `events_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `event_master`
--
ALTER TABLE `event_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback_master`
--
ALTER TABLE `feedback_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `locations_list`
--
ALTER TABLE `locations_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `milestones_master`
--
ALTER TABLE `milestones_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `project_master`
--
ALTER TABLE `project_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rate_list`
--
ALTER TABLE `rate_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services_list`
--
ALTER TABLE `services_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `supplier_portfolio`
--
ALTER TABLE `supplier_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_assign_event_type`
--
ALTER TABLE `user_assign_event_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_assign_rate`
--
ALTER TABLE `user_assign_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_assign_services`
--
ALTER TABLE `user_assign_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_assign_service_location`
--
ALTER TABLE `user_assign_service_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
