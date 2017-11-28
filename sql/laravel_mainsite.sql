-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 08:32 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_mainsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `retype_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `retype_password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Rumman', 'rumman142228@gmail.com', '$2y$10$fxC/MnTcDT.Hdf6LojEjmOOqysAsBbOVi3eknBNSU5naGEqHxCTNC', '$2y$10$nTbay9jsN7r4g/tvuvysHeKAIYQI2O6M9QzaO/kxLemEHcD16vaLa', 'oPxjvK8vEyCor33kZqtM4xwF63ICjiFYPcygdzVgSxv7tYdWgvO5RDmLPzic', '2017-06-13 23:39:59', '2017-06-22 04:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Technology', '2017-06-16 10:58:49', '2017-07-18 04:00:58'),
(5, 'Laravel', '2017-07-19 10:11:16', '2017-07-19 10:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `check` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `body`, `created_at`, `updated_at`, `check`) VALUES
(1, 'adsfas', 'adf@gmail.com', 'asdfasdf', 'asdfsd', '2017-06-19 09:35:19', '2017-06-19 09:44:17', 1),
(2, 'afds', 'asdf@gmail.com', 'adsf', 'adsf', '2017-06-19 10:06:11', '2017-06-19 11:15:26', 1),
(4, 'asdfasdf', 'asdf@gmail.com', 'asdfasdf', 'asdfasdfasdfasd', '2017-06-21 11:04:15', '2017-06-21 11:04:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `index_page_options`
--

CREATE TABLE `index_page_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `about_me_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` text COLLATE utf8mb4_unicode_ci,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `index_page_options`
--

INSERT INTO `index_page_options` (`id`, `about_me_title`, `about_me`, `age`, `experience`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Sometime it''s not a pretty cool thing to say something', 'I am always satisfied what I am. Someone likes me,Other one dislike me or Someone hates me. It''s completely up to you,how you accept me. So,talk to me,if you want to talk with me.', '22', '1+ years', 'Jhenaidah,Bangladesh', NULL, '2017-07-17 13:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_13_165433_create_services_table', 1),
(4, '2017_06_13_165930_create_admin_users_table', 1),
(5, '2017_06_14_063640_create_service_lists_table', 2),
(6, '2017_06_14_103818_create_index_page_options_table', 3),
(7, '2017_06_14_181921_create_resume_options_table', 4),
(8, '2017_06_15_062922_create_portfolio_services_table', 5),
(10, '2017_06_15_081806_create_port_service_lists_table', 6),
(11, '2017_06_16_165542_create_categories_table', 7),
(12, '2017_06_16_170412_create_tags_table', 8),
(13, '2017_06_16_170606_create_posts_table', 8),
(14, '2017_06_16_170904_create_post_tag_table', 9),
(16, '2017_06_19_153115_create_contacts_table', 10),
(17, '2017_06_19_154137_modify_contacts_table_column', 11),
(18, '2017_06_19_172008_create_social_links_table', 12),
(19, '2017_06_20_123254_create_site_options_table', 13),
(20, '2017_06_21_065734_add_column_in_post_serve_lists_table', 14),
(21, '2017_06_22_095428_create_password_resets_table_new', 15),
(22, '2017_07_18_134032_create_site_images_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_services`
--

CREATE TABLE `portfolio_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_services`
--

INSERT INTO `portfolio_services` (`id`, `name`, `data_type`, `priority`, `created_at`, `updated_at`) VALUES
(13, 'Laravel', 'laravel', 5000, '2017-07-16 03:23:45', '2017-07-16 03:23:45'),
(14, 'PHP', 'php', 10000, '2017-07-16 03:23:59', '2017-07-16 03:23:59'),
(15, 'Wordpress', 'wp', 15000, '2017-07-16 03:24:28', '2017-07-16 03:24:28'),
(16, 'Javascript', 'js', 20000, '2017-07-16 03:25:10', '2017-07-16 03:25:10'),
(17, 'Programming(C,C++)', 'pg', 25000, '2017-07-16 03:25:55', '2017-07-16 03:25:55'),
(18, 'HTML & CSS', 'html-css', 30000, '2017-07-16 03:26:44', '2017-07-16 03:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `port_service_lists`
--

CREATE TABLE `port_service_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `portfolio_service_id` int(11) NOT NULL,
  `github` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `demo_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demo_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `port_service_lists`
--

INSERT INTO `port_service_lists` (`id`, `title`, `image`, `description`, `portfolio_service_id`, `github`, `demo`, `priority`, `created_at`, `updated_at`, `demo_one`, `demo_two`) VALUES
(16, 'QuickQuizzes-Online_Exam_System', '1500197516.jpg', '<p>&nbsp;</p>\r\n<p>1. Firstly, You can manage your exams both creation and participation.<br /> 2. This site is secured.<br /> 3. Using prepared statements for securiy &amp; safe query to DB server. <br /> 4. Using PHP OOP way. <br /><br /></p>', 14, 'https://github.com/rumman57/QuickQuizzes-Online_Exam_System-PHP_OOP', NULL, 1000, '2017-07-16 03:31:57', '2017-07-17 00:37:31', NULL, NULL),
(17, 'Flatsome-wp-wcm_theme_customization', '1500199399.jpg', '<p>&nbsp;</p>\r\n<p>1. This is a wordpress WooCommerce site. <br /> 2. This site is customized by using Flatsome | Multi-Purpose Responsive WooCommerce Theme.<br /><br /></p>', 15, 'https://github.com/rumman57/flatsome-wp_woocommerce_theme_customization', NULL, 20000, '2017-07-16 03:51:07', '2017-07-17 00:36:45', NULL, NULL),
(18, 'AJAX-search-sort-filter-paginate-range', '1500200459.jpg', '<p>&nbsp;</p>\r\n<p>1. Ajax Search<br /> 2. Ajax Sort<br /> 3. Ajax Filter<br /> 4. Ajax Range-Slider<br /> 5. Ajax Pagination<br /> 6. Ajax Refine Search<br /> 7. Ajax Admin Panel<br /><br /></p>', 16, 'https://github.com/rumman57/AJAX-search-sort-filter-paginate-range', NULL, 40000, '2017-07-16 04:20:59', '2017-07-17 00:36:02', NULL, NULL),
(19, 'eShopper-wp-eCmce-_theme_development', '1500273052.jpg', '<p>1. This is a wordpress eCommerce Site.</p>\r\n<p>2. This site is developed using HTML template named eShopper.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 15, 'https://github.com/rumman57/eShopper-wp_eCommerce-_theme_development', NULL, 60000, '2017-07-17 00:30:53', '2017-07-17 01:20:45', NULL, NULL),
(20, 'Fruitfun-PHP_OOP_eCommerce-site', '1500277816.jpg', '<p>1. This is my first eCommerce site.</p>\r\n<p>2. Using ALERTIFY JS for flash messages.</p>\r\n<p>3. Using Categories &amp; Brands.</p>\r\n<p>4. Quantity maintained from cart page easily.</p>\r\n<p>5. CRUD in Admin Panel &amp; etc.&nbsp;</p>\r\n<p>&nbsp;</p>', 14, 'https://github.com/rumman57/Fruitfun-PHP_OOP_eCommerce-site', NULL, 80000, '2017-07-17 01:49:22', '2017-07-17 01:50:16', NULL, NULL),
(21, 'Education-wp_theme_customization', '1500278992.jpg', '<p>1.&nbsp;<span style="color: #24292e; font-family: -apple-system, BlinkMacSystemFont, ''Segoe UI'', Helvetica, Arial, sans-serif, ''Apple Color Emoji'', ''Segoe UI Emoji'', ''Segoe UI Symbol''; font-size: 16px;">This is my first professional website</span></p>\r\n<p><span style="color: #24292e; font-family: -apple-system, BlinkMacSystemFont, ''Segoe UI'', Helvetica, Arial, sans-serif, ''Apple Color Emoji'', ''Segoe UI Emoji'', ''Segoe UI Symbol''; font-size: 16px;">2.&nbsp;</span><span style="color: #24292e; font-family: -apple-system, BlinkMacSystemFont, ''Segoe UI'', Helvetica, Arial, sans-serif, ''Apple Color Emoji'', ''Segoe UI Emoji'', ''Segoe UI Symbol''; font-size: 16px;">I customized this site using Education Theme.</span></p>\r\n<p>&nbsp;</p>', 15, 'https://github.com/rumman57/education-wp_theme_customization', NULL, 120000, '2017-07-17 02:09:52', '2017-07-17 03:25:29', NULL, NULL),
(22, 'Blog-PHP', '1500283212.jpg', '<p>1. This is my first PHP Project.</p>\r\n<p>2. Simple Project With Raw PHP.</p>\r\n<p>3. Admin Panel is also included.</p>\r\n<p>&nbsp;</p>', 14, 'https://github.com/rumman57/Blog-PHP', NULL, 100000, '2017-07-17 03:08:46', '2017-07-17 03:25:11', NULL, NULL),
(23, 'Rumman-s_Platform--PHP-blog', '1500283328.jpg', '<p>1. This is a PHP OOP blog site.</p>\r\n<p>2. Admin Panel is also included.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 14, 'https://github.com/rumman57/Rumman-s_Platform-PHP-blog', NULL, 70000, '2017-07-17 03:22:09', '2017-07-17 03:24:48', NULL, NULL),
(24, 'Moderna-wp_theme_development', '1500283846.jpg', '<p>1. This is my first Wordpress theme development project.</p>\r\n<p>2. This theme is developed by using HTML template named Moderna.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 15, 'https://github.com/rumman57/moderna-wp_theme_development', NULL, 140000, '2017-07-17 03:30:46', '2017-07-17 03:32:57', NULL, NULL),
(25, 'LightOj Problems Solved', '1500295772.jpg', '<p>1. I solved some problems in this site.</p>\r\n<p>2. Code link of the problems are given below.</p>\r\n<p>&nbsp;</p>', 17, 'https://github.com/rumman57/LightOJ', NULL, 160000, '2017-07-17 06:35:35', '2017-07-17 07:49:03', NULL, NULL),
(26, 'PSD to HTML', '1500295400.jpg', '<p>&nbsp;1.&nbsp;Dr. Saj Jivraj-PSD to HTML Project</p>\r\n<p>&nbsp;</p>', 18, 'https://github.com/rumman57/psd-2-html-2', NULL, 180000, '2017-07-17 06:43:21', '2017-07-17 06:44:11', NULL, NULL),
(27, 'URI Problems Solved', '1500299435.jpg', '<p>1. I solved some problems in this site.</p>\r\n<p>2. Code link is given below.</p>\r\n<p>&nbsp;</p>', 17, 'https://github.com/rumman57/URI', NULL, 200000, '2017-07-17 07:50:35', '2017-07-17 07:50:35', NULL, NULL),
(28, 'Avada-wp-theme_customization', '1500305859.jpg', '<p>1. Wordpress Avada theme customization.</p>\r\n<p>2. Using Revolution Slider.</p>\r\n<p>3. Using Other extra features.</p>\r\n<p>&nbsp;</p>', 15, 'https://github.com/rumman57/Avada-wp-theme_customization', NULL, 90000, '2017-07-17 09:37:39', '2017-07-17 09:37:39', NULL, NULL),
(29, 'PSD to HTML', '1500307754.jpg', '<p>1. Corporatix-PSD to HTML Project.</p><p><br data-mce-bogus="1"></p>', 18, 'https://github.com/rumman57/psd-2-html-1', NULL, 220000, '2017-07-17 10:09:14', '2017-07-17 10:09:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(11, 'How to download youtube videos using Tampermonkey', 'how-to-download-youtube-videos-using-tampermonkey', '<p>You Can Download Youtube Videios Easily &amp; also effective way by using Tampermoneky Extenstion. You can also download other page videos using this software.</p>\r\n\r\n<h2>Procedure:</h2>\r\n\r\n<p>First Open your browser. In the address bar type &quot;http://en.savefrom.net/userjs-setup.php&quot; or serach from google.</p>\r\n\r\n<p><img alt="" src="http://localhost:8000/img/1500385525.png" style="float:left; height:400px; width:600px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In the savefrom.net you have to install &nbsp;&quot;SaveFrom.net helper&quot; UserJS installation.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="http://localhost:8000/img/1500387509.png" style="height:400px; width:600px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Then You have to download Tampermoneky addons for your browser. Download it &amp; Adjust Your Setting.&nbsp;</p>', NULL, 4, '2017-07-18 08:20:47', '2017-07-18 10:58:13'),
(12, 'Send email using the GMail SMTP server in Laravel', 'send-email-using-gmail-smtp-server-in-laravel', '<p>Laravel provides a clean, simple API over the popular <strong>SwiftMaile</strong> library with drivers for SMTP.&nbsp;</p>\r\n\r\n<p>To set up configuration you first open the file config/mail.php</p>\r\n\r\n<p><img alt="" src="http://localhost:8000/img/1500483229.png" style="height:450px; width:700px" /></p>\r\n\r\n<p>Here,you should provide your email address.</p>\r\n\r\n<p>Now, open .env file,go to below &amp; set up mail configuation just like this.</p>\r\n\r\n<p><img alt="" src="http://localhost:8000/img/1500483607.png" style="height:466px; width:600px" /></p>\r\n\r\n<p>So,your laravel configuration is now finished.</p>\r\n\r\n<p>But,this is not at all. You have to do some other things for doing this workable.</p>\r\n\r\n<p>If you try to send email now,you got an email looks like below &amp; you can&#39;t send email.</p>\r\n\r\n<p><img alt="" src="http://localhost:8000/img/1500484433.png" style="height:486px; width:600px" /></p>\r\n\r\n<p>Now, You have to do two things.</p>\r\n\r\n<p>Go to this link and &amp; turn on lesssecureapps.</p>\r\n\r\n<p><a href="https://myaccount.google.com/lesssecureapps">https://myaccount.google.com/lesssecureapps</a></p>\r\n\r\n<p>Again go to this link &amp; &quot; Allow access to your Google account&quot; to click the continue button.</p>\r\n\r\n<p><a href="https://accounts.google.com/b/0/DisplayUnlockCaptcha">https://accounts.google.com/b/0/DisplayUnlockCaptcha</a></p>\r\n\r\n<p>That&#39;s All. Probably this should work for you.</p>', NULL, 5, '2017-07-19 11:21:56', '2017-07-19 11:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(15, 11, 4, NULL, NULL),
(16, 11, 5, NULL, NULL),
(17, 12, 6, NULL, NULL),
(18, 12, 7, NULL, NULL),
(19, 12, 8, NULL, NULL),
(20, 12, 9, NULL, NULL),
(21, 12, 4, NULL, NULL),
(22, 12, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resume_options`
--

CREATE TABLE `resume_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resume_options`
--

INSERT INTO `resume_options` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1500487819.png', NULL, '2017-07-19 12:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `icon`, `priority`, `created_at`, `updated_at`) VALUES
(7, 'PHP', 'fa fa-envira', 100, '2017-07-17 11:43:06', '2017-07-17 11:52:41'),
(8, 'Wordpress', 'fa fa-wordpress', 200, '2017-07-17 11:44:01', '2017-07-17 11:44:01'),
(9, 'Javascript', 'fa fa-hand-o-right', 300, '2017-07-17 11:49:02', '2017-07-17 11:49:02'),
(10, 'Programming(C,C++,Java)', 'fa fa-skyatlas', 400, '2017-07-17 11:51:09', '2017-07-17 11:51:09'),
(11, 'HTML & CSS', 'fa fa-html5', 500, '2017-07-17 11:54:57', '2017-07-17 11:54:57'),
(12, 'Database', 'fa fa-database', 600, '2017-07-17 11:55:44', '2017-07-17 11:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `service_lists`
--

CREATE TABLE `service_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_lists`
--

INSERT INTO `service_lists` (`id`, `name`, `service_id`, `created_at`, `updated_at`) VALUES
(7, 'Laravel Framework', 7, '2017-07-17 12:00:36', '2017-07-17 12:00:36'),
(8, 'PHP OOP  knowledge', 7, '2017-07-17 12:01:33', '2017-07-17 12:01:33'),
(9, 'Raw PHP knowledge', 7, '2017-07-17 12:03:39', '2017-07-17 12:03:39'),
(10, 'Wordpress theme development', 8, '2017-07-17 12:04:18', '2017-07-17 12:04:18'),
(11, 'Wordpress eCommerce theme development', 8, '2017-07-17 12:04:40', '2017-07-17 12:04:40'),
(12, 'Wordpress theme customization', 8, '2017-07-17 12:05:03', '2017-07-17 12:05:03'),
(13, 'Wordpress eCommerce theme customization', 8, '2017-07-17 12:05:55', '2017-07-17 12:05:55'),
(14, 'JS basic knowledge', 9, '2017-07-17 12:06:25', '2017-07-17 12:06:25'),
(15, 'jQuery basic knowledge', 9, '2017-07-17 12:06:50', '2017-07-17 12:06:50'),
(17, 'AJAX knowledge', 9, '2017-07-17 12:07:24', '2017-07-17 12:07:24'),
(18, 'C Programming knowledge', 10, '2017-07-17 12:07:58', '2017-07-17 12:07:58'),
(19, 'C++ Programming knowledge.', 10, '2017-07-17 12:08:13', '2017-07-17 12:08:13'),
(20, 'Java Programming knowledge', 10, '2017-07-17 12:08:40', '2017-07-17 12:08:40'),
(21, 'HTML,CSS & Bootstrap knowledge', 11, '2017-07-17 12:10:51', '2017-07-17 12:10:51'),
(22, 'PSD to HTML template', 11, '2017-07-17 12:11:10', '2017-07-17 12:11:10'),
(23, 'PSD to HTML template with Bootstrap', 11, '2017-07-17 12:11:24', '2017-07-17 12:11:24'),
(24, 'SQL,Mysql knowledge', 12, '2017-07-17 12:11:51', '2017-07-17 12:11:51'),
(25, 'E-R diagram design and implement', 12, '2017-07-17 12:12:27', '2017-07-17 12:12:27'),
(26, 'About UML diagram & Normalization', 12, '2017-07-17 12:13:02', '2017-07-17 12:13:02');

-- --------------------------------------------------------

--
-- Table structure for table `site_images`
--

CREATE TABLE `site_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_images`
--

INSERT INTO `site_images` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, '1500385525.png', '2017-07-18 07:45:25', '2017-07-18 07:45:25'),
(3, '1500387509.png', '2017-07-18 08:18:30', '2017-07-18 08:18:30'),
(4, '1500483229.png', '2017-07-19 10:53:50', '2017-07-19 10:53:50'),
(5, '1500483607.png', '2017-07-19 11:00:07', '2017-07-19 11:00:07'),
(6, '1500484433.png', '2017-07-19 11:13:53', '2017-07-19 11:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `site_options`
--

CREATE TABLE `site_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_desc` text COLLATE utf8mb4_unicode_ci,
  `what_i_am` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_options`
--

INSERT INTO `site_options` (`id`, `menu_image`, `copyright`, `portfolio_desc`, `what_i_am`, `created_at`, `updated_at`) VALUES
(1, '1499670168.png', 'copyright &copy Rumman 2017.  All rights reserved.', 'It''s feel too good for me,when I work on some projects. Refreshment when one project is completed covered me with a relaxation mood. Because,when I absorbed on my work,my subconscious mind always say that,this should works this way,this way is not so good ,find another way & some other activities that always keep my brain revolved. Sometimes,it''s a pretty good things for me. After all, I enjoy myself for doing this pretty stupid works.', 'PHP Developer', NULL, '2017-07-18 03:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(3, 'fa fa-facebook-official fa-lg', 'https://www.facebook.com/profile.php?id=100007914910361', '2017-06-19 11:25:40', '2017-07-18 03:54:58'),
(4, 'fa fa-github fa-lg', 'https://github.com/rumman57', '2017-06-19 11:26:01', '2017-07-18 03:53:06'),
(5, 'fa fa-youtube fa-lg', '#', '2017-06-19 11:26:14', '2017-06-19 11:26:14'),
(6, 'fa fa-linkedin fa-lg', '#', '2017-06-19 11:26:27', '2017-06-19 11:26:27'),
(7, 'fa fa-twitter fa-lg', '#', '2017-06-19 11:26:39', '2017-06-19 11:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'tampermonkey', '2017-07-18 04:05:19', '2017-07-18 04:05:19'),
(5, 'savefrom', '2017-07-18 04:06:18', '2017-07-18 04:06:18'),
(6, 'laravel', '2017-07-19 10:11:29', '2017-07-19 10:11:29'),
(7, 'smtp', '2017-07-19 10:11:42', '2017-07-19 10:11:42'),
(8, 'gmail', '2017-07-19 10:11:49', '2017-07-19 10:11:49'),
(9, 'email', '2017-07-19 10:12:17', '2017-07-19 10:12:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_page_options`
--
ALTER TABLE `index_page_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolio_services`
--
ALTER TABLE `portfolio_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `port_service_lists`
--
ALTER TABLE `port_service_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `resume_options`
--
ALTER TABLE `resume_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_lists`
--
ALTER TABLE `service_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_images`
--
ALTER TABLE `site_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_options`
--
ALTER TABLE `site_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `index_page_options`
--
ALTER TABLE `index_page_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `portfolio_services`
--
ALTER TABLE `portfolio_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `port_service_lists`
--
ALTER TABLE `port_service_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `resume_options`
--
ALTER TABLE `resume_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `service_lists`
--
ALTER TABLE `service_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `site_images`
--
ALTER TABLE `site_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `site_options`
--
ALTER TABLE `site_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
