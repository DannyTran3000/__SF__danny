-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 08:46 AM
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
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customization`
--

INSERT INTO `customization` (`id`, `section`, `content`, `created_at`, `updated_at`) VALUES
(1, 'hero', '{\"heading\":\"Software Developer\",\"sub_heading\":\"👋 Hi! my name is Danny Tran & I am a\",\"description\":\"Elevating Digital Experiences Through Elegant Code:<br />With a deep passion for innovation, I craft software solutions that transform ideas into exceptional realities, leaving a lasting mark on the digital landscape.\",\"buttons\":{\"primary\":{\"text\":\"Get Started\",\"url\":\"#about\"},\"secondary\":{\"text\":\"Contact Me\",\"url\":\"#contact\"}},\"joke\":\"Why do software developers make great superheroes?<br />Because they always save the day with their coding superpowers! 💻💥\"}', '2023-10-19 01:18:58', NULL),
(2, 'about', '{\"heading\":\"What services will you get?\",\"sub_heading\":\"🛠️ Let’s build something together.\",\"description\":\"As a dedicated software developer, I\'m driven by a strong commitment to delivering high-quality digital solutions. My passion lies in leveraging my expertise to help clients transform their digital dreams into reality. I\'m not just a developer, but a true partner who thrives on collaboration and strives to exceed your expectations, ensuring that every project becomes a testament to innovation and purpose-driven design.\"}', '2023-10-19 02:29:49', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customization`
--
ALTER TABLE `customization`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customization`
--
ALTER TABLE `customization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
