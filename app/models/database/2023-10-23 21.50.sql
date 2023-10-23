-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 12:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sf_danny`
--

-- --------------------------------------------------------

--
-- Table structure for table `customization`
--

CREATE TABLE `customization` (
  `id` int(11) NOT NULL,
  `section` varchar(20) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customization`
--

INSERT INTO `customization` (`id`, `section`, `content`, `created_at`, `updated_at`) VALUES
(1, 'hero', '{\"heading\":\"Software Developer\",\"sub_heading\":\"👋 Hi! my name is Danny Tran & I am a\",\"description\":\"Elevating Digital Experiences Through Elegant Code:<br />With a deep passion for innovation, I craft software solutions that transform ideas into exceptional realities, leaving a lasting mark on the digital landscape.\",\"buttons\":{\"primary\":{\"text\":\"Get Started\",\"url\":\"#about\"},\"secondary\":{\"text\":\"Contact Me\",\"url\":\"#contact\"}},\"joke\":\"Why do software developers make great superheroes?<br />Because they always save the day with their coding superpowers! 💻💥\"}', '2023-10-19 01:18:58', NULL),
(2, 'about', '{\"heading\":\"What services will you get?\",\"sub_heading\":\"🛠️ Let’s build something together.\",\"description\":\"As a dedicated software developer, I\'m driven by a strong commitment to delivering high-quality digital solutions. My passion lies in leveraging my expertise to help clients transform their digital dreams into reality. I\'m not just a developer, but a true partner who thrives on collaboration and strives to exceed your expectations, ensuring that every project becomes a testament to innovation and purpose-driven design.\"}', '2023-10-19 02:29:49', NULL),
(3, 'github', '{\"heading\":\"Discover my ###Github*** portfolio\",\"description\":\"I showcase a diverse range of open-source contributions and personal projects. Explore my coding journey, delve into the code, and witness how I\'ve tackled real-world challenges with creativity and precision. My GitHub is a testament to my passion for development and problem-solving.\",\"button\":{\"text\":\"Check My Github Profile\",\"url\":\"https://github.com/DannyTran3000\"}}', '2023-10-19 20:44:10', NULL),
(4, 'linkedin', '{\"heading\":\"Begin your journey with me,<br>I’ve expertise in those apps.\",\"description\":\"I design, create, and maintain computer programs and applications.<br>I analyze user needs, write code, test, and continuously improve software to meet client requirements and industry standards.\",\"button\":{\"text\":\"Check My LinkedIn\",\"url\":\"https://www.linkedin.com/in/dannytran3000/\"}}', '2023-10-19 22:25:07', NULL),
(5, 'connect', '{\"heading\":\"Looks like you’re serious<br />about getting stuff done!\",\"joke\":\"Think carefully since this opportunity will not come again.<br>It\'s a tiny world.\",\"button\":{\"text\":\"Get More Inspiration\",\"url\":\"#project\"}}', '2023-10-19 22:30:55', NULL),
(6, 'project', '{\"heading\":\"Check out some of the<br>products I\'ve worked on\",\"description\":\"Through close client collaboration, I gained insight into their business goals and audience needs, designing a user interface that not only met but exceeded their expectations, effectively achieving their objectives.\",\"button\":{\"text\":\"View All My Work\",\"url\":\"/works\"}}', '2023-10-20 07:22:05', NULL),
(7, 'contact', '{\"heading\":\"Reach Out!\",\"sub_heading\":\"Looks like you need some help!!!\",\"description\":\"I usually respond within an hour, but developers do sleep three to six hours a night, so it might take a bit longer. Thank you and I am looking to hearing from you.\",\"joke\":\"By submitting this form, you acknowledge receipt of the Privacy and policy.\",\"quote\":{\"author\":\"Rick Cook\",\"content\":\"Software development is a race between engineers, striving to build bigger and better idiot-proof programs, and the universe, trying to produce bigger and better idiots. So far, the universe is winning.\"}}', '2023-10-20 08:02:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Custom Software Development', 'Tailoring software to your unique needs, ensuring optimal functionality and efficiency.', '/assets/images/service-software.png', '2023-10-19 18:18:32', NULL),
(2, 'Web Application Development', 'Creating responsive web apps for seamless user experiences across devices.', '/assets/images/service-web-app.png', '2023-10-19 18:21:21', NULL),
(3, 'Database Management', 'Efficiently organizing and optimizing databases for data-driven applications.', '/assets/images/service-database.png', '2023-10-19 18:21:21', NULL),
(4, 'Security Enhancement', 'Strengthening software defenses with robust security measures and continuous monitoring.', '/assets/images/service-security.png', '2023-10-19 18:21:21', NULL),
(5, 'API Integration', 'Seamlessly integrating third-party APIs to extend software functionality.', '/assets/images/service-api.png', '2023-10-19 18:21:21', NULL),
(6, 'Code Refactoring & Optimization', 'Enhancing software performance and maintainability through code refactoring and optimization.', '/assets/images/service-code.png', '2023-10-19 18:21:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tech_stacks`
--

CREATE TABLE `tech_stacks` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tech_stacks`
--

INSERT INTO `tech_stacks` (`id`, `title`, `description`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'MERN Stack', 'A Combination of MongoDB, Express, React, Node.js for web development.', '/assets/images/react.png', '2023-10-19 22:37:48', NULL),
(2, 'WAMP Stack', 'Windows, Apache, MySQL, PHP for web application development on Windows systems.', '/assets/images/database.png', '2023-10-19 22:38:53', NULL),
(3, 'Wordpress CMS', 'Popular, user-friendly, open-source platform for website content management and blogging.', '/assets/images/wordpress.png', '2023-10-19 22:38:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0: inactive, 1: active, 2: coming soon',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `title`, `description`, `thumbnail`, `url`, `featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 'DmnTran', 'A Portfolio website was developed in 2022, which was made from Next.js framework.', '/assets/upload/dmntran.png', 'https://dmntran.vercel.app/', 1, 1, '2023-10-20 07:31:16', NULL),
(2, 'SF Studio', 'A Webapp development agency website, which was made from WAMP Stack. Estimated release time is by 2023.', NULL, NULL, 1, 2, '2023-10-20 07:34:21', NULL),
(3, 'I-Learn', 'An educational management platform. Providing many features related to courses, attendances, timetable, quiz, message, etc. Estimated release time is by 2024.', NULL, NULL, 1, 2, '2023-10-20 07:34:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customization`
--
ALTER TABLE `customization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tech_stacks`
--
ALTER TABLE `tech_stacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customization`
--
ALTER TABLE `customization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tech_stacks`
--
ALTER TABLE `tech_stacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
