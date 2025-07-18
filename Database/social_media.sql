-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 فبراير 2025 الساعة 19:46
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_media`
--

-- --------------------------------------------------------

--
-- بنية الجدول `about_3`
--

CREATE TABLE `about_3` (
  `post_id` int(11) NOT NULL,
  `photo_url` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `descrt` text NOT NULL,
  `post_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `about_3`
--

INSERT INTO `about_3` (`post_id`, `photo_url`, `caption`, `descrt`, `post_title`) VALUES
(1, 'newpost.jpg', 'PARAGRAPH ->LIKE In keeping with our slogan “complete care,” we have provided many modern comprehensive and integrated services for the first time in Yemen.', 'DESCRIPTION ->LIKE We seek to provide safe, approved and advanced services through a qualified work team that works to achieve your demands.', 'Y-NAME-SER'),
(2, 'newpost3.jpeg', 'PARAGRAPH ->LIKE In keeping with our slogan “complete care,” we have provided many modern comprehensive and integrated services for the first time in Yemen.', 'DESCRIPTION ->LIKE We seek to provide safe, approved and advanced services through a qualified work team that works to achieve your demands.', 'Y-NAME-SER'),
(3, 'newpost7.jpeg', 'PARAGRAPH ->LIKE In keeping with our slogan “complete care,” we have provided many modern comprehensive and integrated services for the first time in Yemen.', 'DESCRIPTION ->LIKE We seek to provide safe, approved and advanced services through a qualified work team that works to achieve your demands.', 'Y-NAME-SER');

-- --------------------------------------------------------

--
-- بنية الجدول `bookmarks`
--

CREATE TABLE `bookmarks` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_text` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `comment_likes`
--

CREATE TABLE `comment_likes` (
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `follows`
--

CREATE TABLE `follows` (
  `follower_id` int(11) NOT NULL,
  `followee_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `hashtags`
--

CREATE TABLE `hashtags` (
  `hashtag_id` int(11) NOT NULL,
  `hashtag_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `hashtag_follow`
--

CREATE TABLE `hashtag_follow` (
  `user_id` int(11) NOT NULL,
  `hashtag_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `home`
--

CREATE TABLE `home` (
  `id` int(9) NOT NULL,
  `title` varchar(200) NOT NULL,
  `desc_1` varchar(250) NOT NULL,
  `desc_2` varchar(500) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `home`
--

INSERT INTO `home` (`id`, `title`, `desc_1`, `desc_2`, `image`) VALUES
(1, 'Technical Services', 'The service can connect users with specialists who specialize in the repair and maintenance of electronic devices, computers, networks and programs.', 'We can connect you with specialists who can help you with your computer, network, and program issues..\r\n								And We can provide resources that help you choose the appropriate universities based on your academic qualification \r\n								and preferences. You can also benefit from consultation services available through the platform.', 'Technical-Support-Services.jpg'),
(2, 'Health Services', 'We can provide you with access to doctors, nurses, medical assistants, hospitals, and clinics to help you solve various health problems.', 'The service can provide links with doctors, nurses, paramedics, hospitals and clinics to solve various health problems.', 'HomeHealthcare-1.jpg'),
(3, 'Car Services', 'We can help you find maintenance workshops and auto mechanics to solve various car problems..', 'The service can provide links with service centers, maintenance workshops, and car mechanics to solve various car problems.', 'carser.jpg'),
(4, 'University Services', 'The service can provide the service of choosing the appropriate universities for the student. This service consists of providing resources that help students choose the right universities for them based on their preferences and academic qualification', 'We can provide resources that help you choose the appropriate universities based on your academic qualification and preferences. You can also benefit from consultation services available through the platform.', 'University-2.jpg'),
(5, 'Household Services', 'TWe can provide you with experts to help solve household problems such as power failure, construction works, and home appliance problems.', 'We can provide you with experts to help solve household problems such as power failure, construction works, and home appliance problems.', 'household-services.jpg');

-- --------------------------------------------------------

--
-- بنية الجدول `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `photo_url` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `size` float DEFAULT NULL CHECK (`size` < 5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `photo_id` int(11) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `caption` varchar(200) DEFAULT NULL,
  `Active_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `descrt` text NOT NULL,
  `type_ser` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `posts_helth`
--

CREATE TABLE `posts_helth` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `photo_url` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `descrt` text NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `type_ser` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `service` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `posts_helth`
--

INSERT INTO `posts_helth` (`post_id`, `user_id`, `photo_url`, `caption`, `location`, `descrt`, `post_title`, `type_ser`, `created_at`, `service`) VALUES
(1, 26, 'rashhhhios123.jpg', 'PARAGRAPH ->LIKE In keeping with our slogan “complete care,” we have provided many modern comprehensive and integrated services for the first time in Yemen.', '', 'DESCRIPTION ->LIKE We seek to provide safe, approved and advanced services through a qualified work team that works to achieve your demands.', 'Y-NAME-SER', NULL, '2025-02-01 07:16:31', ''),
(2, 26, 'newpost3.jpeg', 'PARAGRAPH ->LIKE In keeping with our slogan “complete care,” we have provided many modern comprehensive and integrated services for the first time in Yemen.', '', 'DESCRIPTION ->LIKE We seek to provide safe, approved and advanced services through a qualified work team that works to achieve your demands.', 'Y-NAME-SER', NULL, '2025-02-01 07:16:31', ''),
(3, 26, 'newpost7.jpeg', 'PARAGRAPH ->LIKE In keeping with our slogan “complete care,” we have provided many modern comprehensive and integrated services for the first time in Yemen.', '', 'DESCRIPTION ->LIKE We seek to provide safe, approved and advanced services through a qualified work team that works to achieve your demands.', 'Y-NAME-SER', NULL, '2025-02-01 07:16:31', ''),
(4, 26, 'photo_679e2eca543a79.60315532.png', 'ww', '', 'wwww', 'wwwwwww', NULL, '2025-02-01 14:25:14', 'Health Services'),
(5, 34, 'photo_679f2eebdab037.88803822.jpg', 'hhhhhhhhgggg', '', ',ddddddnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', '2524eeddd', NULL, '2025-02-02 08:38:03', 'Health Services');

-- --------------------------------------------------------

--
-- بنية الجدول `posts_tec`
--

CREATE TABLE `posts_tec` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `photo_url` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `descrt` text NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `type_ser` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `service` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `posts_tec`
--

INSERT INTO `posts_tec` (`post_id`, `user_id`, `photo_url`, `caption`, `location`, `descrt`, `post_title`, `type_ser`, `created_at`, `service`) VALUES
(1, 8, '88.jpg', 'Global Maintenance', '', '🔷 We have a team specialized in repairing laptops, and we guarantee you a quick and effective fix for all your device problems, whether the problem is with the screen, battery, or internal parts. We have the experience and knowledge to deal with them efficiently. 🔷 We use the latest technologies and advanced tools to diagnose and repair faults with high accuracy. We also provide original and reliable spare parts to ensure that your laptop is restored to its optimal performance. 🔷 Thanks to our professional and dedicated team, we can provide fast and reliable service at competitive prices. We care about our customers\\\' satisfaction and strive to provide a comfortable and satisfying repair experience. #International_Maintenance has more than 15 years of experience in computer maintenance Address: Sanaa - Sakher Street - next to Ishaq Agency, second floor. ☎️ Phone: 01215124 📱Mobile: 773516390 770223222 ..', 'Repair your laptop professionally 💻 International Maintenance  Speed ​​ Proficiency  Guarantee', NULL, '2025-01-18 16:56:43', ''),
(2, 8, 'hbnjkk.jpg', 'Maintenance', '', 'We seek to provide safe, approved and advanced medical services through a qualified team that works to achieve recovery and patient confidence.', 'Repair your laptop professionally 💻 International Maintenance  Speed ​​ Proficiency  Guarantee', NULL, '2025-01-19 14:23:58', ''),
(3, 8, 'rashhhhios123.jpg', 'Global', '', 'Repair your laptop professionally 💻 International Maintenance  Speed ​​ Proficiency  Guarantee', 'Repair your laptop professionally 💻 International Maintenance  Speed ​​ Proficiency  Guarantee', NULL, '2025-01-19 14:38:40', 'Technical Services'),
(4, 8, 'photo_678d0f6b73dd29.56162972.jpg', 'Maintenance', '', 'Repair your laptop professionally 💻 International Maintenance  Speed ​​ Proficiency  Guarantee', 'Repair your laptop professionally 💻 International Maintenance  Speed ​​ Proficiency  Guarantee', NULL, '2025-01-19 14:42:51', 'Technical Services'),
(5, 12, 'photo_679699a8923ab8.39742377.jpg', 'work', '', 'work', 'work', NULL, '2025-01-26 20:23:04', 'Technical Services'),
(6, 12, 'photo_67969a557c4913.24760396.png', 'work', '', 'work', 'work', NULL, '2025-01-26 20:25:57', 'Technical Services'),
(7, 16, 'photo_679aa8bdc54a05.62626661.jpg', 'jghjghgh', '', 'fghjkjjjjghghfgfgfgf', 'ree', NULL, '2025-01-29 22:16:29', 'Technical Services'),
(8, 20, 'photo_679ce9397c6d26.67764682.png', 'qqqq', '', 'qqqqq', 'qqqqqq', NULL, '2025-01-31 15:16:09', 'Technical Services'),
(9, 21, 'photo_679d4b66940ed0.30518726.jpg', 'werty', '', 'qwertyu', 'wert', NULL, '2025-01-31 22:15:02', 'Technical Services'),
(10, 29, 'photo_679e70d5db2b64.08662467.png', 'www', '', 'qwewqwsswsdwq', 'eee', NULL, '2025-02-01 19:07:01', 'Technical Services'),
(11, 30, 'photo_679e7389108d43.84688964.jpg', 'hhhh', '', ';olikujhygtfr', 'gfd', NULL, '2025-02-01 19:18:33', 'Health Services'),
(12, 34, 'photo_679e77440e0cd0.41957875.jpeg', 'hhhhhhhh', '', 'q23edsaqwertgyhjhgfd', 'aaaaa', NULL, '2025-02-01 19:34:28', 'Technical Services');

-- --------------------------------------------------------

--
-- بنية الجدول `post_likes`
--

CREATE TABLE `post_likes` (
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `post_tags`
--

CREATE TABLE `post_tags` (
  `post_id` int(11) NOT NULL,
  `hashtag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `profile_photo_url` varchar(255) DEFAULT 'personal.gif',
  `Address` varchar(255) DEFAULT NULL,
  `Fname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(30) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `per_number` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`user_id`, `username`, `profile_photo_url`, `Address`, `Fname`, `Lname`, `bio`, `password`, `created_at`, `email`, `phone`, `per_number`) VALUES
(8, '[rashios123 admin111]', '3.jpg', '[]', '[ras111]', '[hhah]', 'Health Services', '[$2y$10$Au/j6LwnXR/RJRs/APSTFeOfQx9q9Hkh0QlwUEpCeG1T7HOWTcDce]', '2025-01-18 16:03:23', '[mo@gmail.com]', '[7766821111111]', 0),
(10, 'rad342', 'photo_6796955d4e4e19.86851519.jpg', 'gdfg', 'gdfg', 'gdfg', 'Technical Services', '$2y$10$EZKbBMXoPc77DvpewH/ygOH8mFboqSHaM7Wo8sXEx1iFnWvqsw0C2', '2025-01-26 20:04:45', 'rad342@g.com', '4545455', 0),
(12, '[raoof1]', 'photo_6796995fca2a70.27092299.jpg', '[]', '[[raoof]]', '[[rr]]', 'Technical Services', '[$2y$10$2MPjQFZpowy9LnXf1NeiG.f8FQ3KNbnrXK7w7RL9FfqDUjWgj3hQG]', '2025-01-26 20:21:51', '[raoof1@gmail.com]', '[1234566667]', 0),
(15, 'admin', 'photo_6796b5a6a194a5.65198238.jpg', 'sanaa', 'raoof', 'alsheikh', 'Technical Services', 'admin', '2025-01-26 22:22:30', 'raoof@gmail.com', '736131205', 0),
(16, 'raoofalsheik', 'photo_679a9f2f756f86.89703928.jpg', 'صنعاء', 'رؤوف', 'الشيخ', 'Technical Services', '$2y$10$Dd2wRut49gHOhcwNkqaZdu/Ji.Tpr/8A46nfULa6.Ruh91hcMUR22', '2025-01-29 21:35:43', 'raoofalsheikh1@gmail.com', '779443847', 0),
(17, 'raoofalsheik1', 'photo_679b9892466f74.98092099.jpg', 'صنعاء', 'رؤوف', 'الشيخ', 'Technical Services', '$2y$10$VLm.MF07y/Q2IW0YHBvtmeifPtzhCnLSNieT2KfJEWRzYH.1Ks61e', '2025-01-30 15:19:46', 'raoofalsheikh1@gmail.com', '07794438471', 0),
(18, '[raoofalsheik4444444444]', 'photo_679bd65ad738e4.17218180.jpg', '[]', '[رؤوف]', '[الشيخ]', 'Technical Services', '[$2y$10$Emzepd2QJ3hAyVxN.b/9YuHSokt6ue3tiToumrN9D54..yXrFK.au]', '2025-01-30 19:43:22', '[raoofalsheikh1@gmail.com]', '[077944384711]', 0),
(20, 'ssss1', 'photo_679ce916a177c3.75375516.jpg', 'ss', 'ttt', 'l', 'Technical Services', '$2y$10$bR1ewzbxq4VaHkCWR9.q/Oizp4KB7AwkmtAZt1dAaBQy5Buks.UFa', '2025-01-31 15:15:34', 'raoofalsheikh1@gmail.com', '33333', 0),
(21, 'ssss12', 'photo_679d4b4ceed7d5.75866205.', 'ss', 'ttt', 'l', 'Technical Services', '$2y$10$5sAwp..a8BVGPLOneLz7SepT3jA7cQnUiqgU70uG.Qe66JmHr9utm', '2025-01-31 22:14:36', 'raoofalsheikh1@gmail.com', '33333', 0),
(22, '1', '3.jpg', 'Yemen1', 'ras111', '11q', '1', '1', '0000-00-00 00:00:00', 'mo@gmail.com', '1', 1),
(26, '11', 'photo_679e174f7b9f69.64524314.jpg', '1', '12', '11', 'Health Services', '$2y$10$R76UcAq.4cCgCAJOHE/CsOfEMFVegoXTFXhVh88mb/DcjJwpavi0m', '2025-02-01 12:45:03', 'mo@gmail.com', '11', 1),
(29, 'q1', 'photo_679e70a9d56e40.17763471.png', 'صنعاء', '123', '456', 'Technical Services', '$2y$10$0K0F974i6VWwEMAK4pQY.elWpTOm7cJ3FbHbv0hFdg.qE4jrbFWhO', '2025-02-01 19:06:17', 'mo@gmail.com', '123456789', 0),
(30, '77', 'photo_679e7336293595.48787027.jpg', 'yy', 'sh', 'ggg', 'Health Services', '$2y$10$lR8lkj4tFk95G2bqKPHd.uwRnVjNkxxe9WGbRemfaEs74lTzxX7xa', '2025-02-01 19:17:10', 'mo@gmail.com', '98765', 0),
(33, '33', '4.jpg', 'Yemen1', 'ras111', '11q', '1', '11', '0000-00-00 00:00:00', 'mo@gmail.com', '1', 1),
(34, 'shehab', 'photo_679e7706ca49b7.92206278.png', 'Yemen1', 'shehab', '1', 'Technical Services', '$2y$10$U2sEMOtIceSAF.RNoD5jWuC3Y1v1NIkyyagpdGWtD/1jbwo2mE.mW', '2025-02-01 19:33:26', 'mo@gmail.com', '111111', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `size` float DEFAULT NULL CHECK (`size` < 10)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_3`
--
ALTER TABLE `about_3`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD PRIMARY KEY (`user_id`,`post_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comment_likes`
--
ALTER TABLE `comment_likes`
  ADD PRIMARY KEY (`user_id`,`comment_id`),
  ADD KEY `comment_id` (`comment_id`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`follower_id`,`followee_id`),
  ADD KEY `followee_id` (`followee_id`);

--
-- Indexes for table `hashtags`
--
ALTER TABLE `hashtags`
  ADD PRIMARY KEY (`hashtag_id`),
  ADD UNIQUE KEY `hashtag_name` (`hashtag_name`);

--
-- Indexes for table `hashtag_follow`
--
ALTER TABLE `hashtag_follow`
  ADD PRIMARY KEY (`user_id`,`hashtag_id`),
  ADD KEY `hashtag_id` (`hashtag_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`),
  ADD UNIQUE KEY `photo_url` (`photo_url`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `photo_id` (`photo_id`),
  ADD KEY `video_id` (`video_id`);

--
-- Indexes for table `posts_helth`
--
ALTER TABLE `posts_helth`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `posts_tec`
--
ALTER TABLE `posts_tec`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post_likes`
--
ALTER TABLE `post_likes`
  ADD PRIMARY KEY (`user_id`,`post_id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`post_id`,`hashtag_id`),
  ADD KEY `hashtag_id` (`hashtag_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`),
  ADD UNIQUE KEY `video_url` (`video_url`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_3`
--
ALTER TABLE `about_3`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hashtags`
--
ALTER TABLE `hashtags`
  MODIFY `hashtag_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts_helth`
--
ALTER TABLE `posts_helth`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts_tec`
--
ALTER TABLE `posts_tec`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- قيود الجداول المُلقاة.
--

--
-- قيود الجداول `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD CONSTRAINT `bookmarks_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`),
  ADD CONSTRAINT `bookmarks_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- قيود الجداول `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- قيود الجداول `comment_likes`
--
ALTER TABLE `comment_likes`
  ADD CONSTRAINT `comment_likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `comment_likes_ibfk_2` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`comment_id`);

--
-- قيود الجداول `follows`
--
ALTER TABLE `follows`
  ADD CONSTRAINT `follows_ibfk_1` FOREIGN KEY (`follower_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `follows_ibfk_2` FOREIGN KEY (`followee_id`) REFERENCES `users` (`user_id`);

--
-- قيود الجداول `hashtag_follow`
--
ALTER TABLE `hashtag_follow`
  ADD CONSTRAINT `hashtag_follow_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `hashtag_follow_ibfk_2` FOREIGN KEY (`hashtag_id`) REFERENCES `hashtags` (`hashtag_id`);

--
-- قيود الجداول `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- قيود الجداول `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`photo_id`),
  ADD CONSTRAINT `post_ibfk_3` FOREIGN KEY (`video_id`) REFERENCES `videos` (`video_id`);

--
-- قيود الجداول `posts_tec`
--
ALTER TABLE `posts_tec`
  ADD CONSTRAINT `posts_tec_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- قيود الجداول `post_likes`
--
ALTER TABLE `post_likes`
  ADD CONSTRAINT `post_likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `post_likes_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`);

--
-- قيود الجداول `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`),
  ADD CONSTRAINT `post_tags_ibfk_2` FOREIGN KEY (`hashtag_id`) REFERENCES `hashtags` (`hashtag_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
