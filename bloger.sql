-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 04:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloger`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` longtext NOT NULL,
  `picture` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `approved` enum('no','yes') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `description`, `picture`, `created_at`, `approved`) VALUES
(18, 9, 'Why we love self-help blogs', 'Self-help blogs or personal growth blogs are easy to access, never more than a click or a finger tap away – I mean, if you have an Internet connection… What a wonderful well of knowledge and experience to tap in!\r\n\r\nSelf-help blogs can be a fantastic source of motivation and inspiration, which we can harness to achieve our goals in life. Some will give you ideas of goals, others will provide you with methodologies on how to get there or boost your morale on the way.\r\n\r\nThe only issue is that there are so many of them that you may get overwhelmed by information overload. That’s what the purpose of this post is: help you find your way in the blog jungle and offer you a selection of some of the most interesting self-help blogs out there.\r\nYou don’t have to read all of them all the time. Just pick up the one(s) you really like. Each blog has its own style and focus topics. Some of you will like inspirational stories that others may find cheesy while others will enjoy more data-oriented sources that some may find boring. That’s exactly why we have chosen a broad range of self-help blogs. We (hopefully) have something there for everyone.\r\n\r\nOnce you find those made for you, it could be a good idea to leverage social media to your advantage and follow them on Twitter, Facebook or subscribe to their email list. This will ensure you stay plugged in!\r\n\r\nSo here is the list (in no particular order) for your daily source of motivation, inspiration, words of wisdom and other life-changing resources that will illuminate your way to personal success.', 'walking-at-the-beach.jpg', '2021-04-09 02:57:35', 'yes'),
(19, 9, '15 Copywriting and Content Marketing Blogs that Will Make You More Money', 'As you may have seen on Tuesday, we were disappointed to see that there were no copywriting blogs in last year’s Top 10 Blogs for Writers.\r\n\r\nWe think persuasive writers — content marketers and copywriters — are as worthy of cheers and accolades as our fiction-writing brothers and sisters.\r\n\r\nSo today I put together a list of 15 writing blogs I think you’ll get a lot out of.\r\n\r\nI got lots of great suggestions for blogs to check out (thank you all), and it was tough to narrow them down to a manageable few.\r\n\r\nWhen winnowing down the list, I had a few rough criteria.\r\n\r\nFirst, writing advice had to be a key element of the blog.\r\n\r\nThere are hundreds of terrific social media and business blogs, and they’re wonderful resources, but we wanted to focus on sites that would make you a better writer.\r\n\r\nI defined better writer in two ways — either as “a writer who ethically and effectively convinces customers to buy more stuff” or “a writer who’s landing more and better clients.”\r\n\r\nWe also didn’t include the big “name brand” sites — we wanted to focus on some smaller sites you might not have seen yet. Not surprisingly, we’ve got a good sample of Copyblogger guest writers here, but also plenty of folks you haven’t seen here. (Not yet, anyway).\r\n\r\nBy the way, when you click through, notice how most of these blogs make great use of their tag lines to tell you exactly how they can help solve a specific problem. Smart copywriters. 🙂\r\n\r\nBenSettle.com\r\nBen Settle\r\nIf you’ve heard Ben speak on our radio show or you’ve read his Copyblogger posts, you know he isn’t wishy-washy. He likes to sell, and he likes to make money. He uses email marketing to do those things, and he has a lot of strong, sharp advice for email marketers. If you’re still nervous about selling, reading Ben Settle might freak you out. Which may be a good and useful thing for you.\r\n\r\nCopylicious\r\nKelly Parkinson\r\nA January post makes us optimistic that Kelly will start writing actively again for this smart, funny writing blog. From her bio: “ … this is not really about copy. This is about improving your whole business.” We couldn’t agree more.', 'cash-globe.jpg', '2021-04-09 12:00:59', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `email` varchar(2256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `admin` enum('no','yes') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `admin`) VALUES
(8, 'ivan', 'ivan', 'ivan@ivan.rs', '$2y$10$SovqU2w4xdcU7g78aXfb0ulSy8vDx60BMA8SvPOx2GduiiOW8FT0C', 'yes'),
(9, 'Vladimir', 'Markovic', 'vladimir1987.markovic@gmail.com', '$2y$10$IZkBMNcl6UJLZkv6iFjiQeQPBR2Ta40rJUqwOYkGYbq2xeRGH3mdS', 'no'),
(10, 'admin', 'admin', 'admin@admin.com', '$2y$10$gI3XKiMv8/Jdw2pBdkKbOeN26tragc0U6LoI8MUzPVlBskWyFMXYC', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
